<?php
/*************************************************************************************/
/*                                                                                   */
/*      Thelia                                                                       */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : info@thelia.net                                                      */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      This program is free software; you can redistribute it and/or modify         */
/*      it under the terms of the GNU General Public License as published by         */
/*      the Free Software Foundation; either version 3 of the License                */
/*                                                                                   */
/*      This program is distributed in the hope that it will be useful,              */
/*      but WITHOUT ANY WARRANTY; without even the implied warranty of               */
/*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                */
/*      GNU General Public License for more details.                                 */
/*                                                                                   */
/*      You should have received a copy of the GNU General Public License            */
/*      along with this program. If not, see <http://www.gnu.org/licenses/>.         */
/*                                                                                   */
/*************************************************************************************/

namespace Klikandpay\Controller;

use Klikandpay\Event\KlikandpayReturnEvent;
use Klikandpay\Klikandpay;
use Klikandpay\Model\Base\KlikandpayReturnQuery;
use Thelia\Controller\Front\BaseFrontController;
use Thelia\Core\Event\Cart\CartEvent;
use Thelia\Core\Event\Order\OrderEvent;
use Thelia\Core\Event\TheliaEvents;
use Thelia\Log\Tlog;
use Thelia\Model\ConfigQuery;
use Thelia\Model\OrderQuery;
use Thelia\Model\OrderStatus;
use Thelia\Model\OrderStatusQuery;


/**
 * Class KlikandpayFrontController
 * @author Thelia <info@thelia.net>
 */
class KlikandpayFrontController extends BaseFrontController
{
    const ORDER_PAY = 'order-payment';
    const ORDER_PLACED = 'order-placed';
    const ORDER_FAILED = 'order-failed';


    /**
     * Method used when an payment is accepeted
     *
     * @param  string $hash hash to retrieve order
     *
     * @throws \Exception
     *
     * @return \Thelia\Core\HttpFoundation\Response
     */
    public function placedAction($hash)
    {
        $order = null;

        // Retrieve the order by id or ref or hash
        $allowed = array('%order_hash%', '%order_id%', '%order_ref%');
        foreach($allowed as $type)
        {
            if(strpos(ConfigQuery::read('klikandpay_retourvok'), $type) !== FALSE)
            {
                // If order has been Paid, HASH was removed from the order table so we use the order id instead
                if($type === '%order_hash%')
                {
                    /** var \Thelia\Model\KlikandpayReturn $return **/
                    $return = KlikandpayReturnQuery::create()->filterByTransaction($hash)->findOne();
                    if ($return)
                    {
                        $hash = $return->getOrderId();
                        $type = '%order_id%';
                    }
                }
                $order = $this->findOrder($hash, $type);
                break; // will leave the foreach loop and also "break" the if statement
            }
        }

        if($order === null)
        {
            throw new \Exception("We are unable to retrieve your order.");
        }

        // Empty cart
        $cart_event = new CartEvent($this->getSession()->getCart());
        $this->dispatch(TheliaEvents::CART_CLEAR, $cart_event);

        return $this->render(
            self::ORDER_PLACED,
            array('placed_order_id' => $order->getId())
        );
    }


    /**
     * Method used when an payment is refused or canceled
     *
     * @param  string $hash hash to retrieve order (Not used)
     *
     * @throws \Exception
     *
     * @return \Thelia\Core\HttpFoundation\Response
     */
    public function failedAction($hash)
    {
        $order = null;

         // Retrieve the order by id or ref or hash
        $allowed = array('%order_hash%', '%order_id%', '%order_ref%');
        foreach($allowed as $type)
        {
            if(strpos(ConfigQuery::read('klikandpay_retourvok'), $type) !== FALSE)
            {
                $order = $this->findOrder($hash, $type);
                break; // will leave the foreach loop and also "break" the if statement
            }
        }

        if($order === null)
        {
            throw new \Exception("We are unable to retrieve your order.");
        }

        // Set order status as CANCEL
        $event = new OrderEvent($order);
        $event->setStatus(OrderStatusQuery::create()->findOneByCode(OrderStatus::CODE_CANCELED)->getId());
        $this->dispatch(TheliaEvents::ORDER_UPDATE_STATUS,$event);

        return $this->render(
            self::ORDER_FAILED,
            array('failed_order_id' => $order->getId())
        );
    }


    /**
     * Method used to change the status of an order when the payment
     * is accepted and if the marchant has configured a dynamic url
     * in the Klik & Pay's backoffice
     *
     * @return none
     */
    public function confirmAction()
    {
        try {
            // GET
            $commande = $this->getRequest()->query->get('commande');
            $numxkp = $this->getRequest()->query->get('NUMXKP');
            $response = $this->getRequest()->query->get('RESPONSE');
            $montantxkp = $this->getRequest()->query->get('MONTANTXKP');

            // Klik&Pay Transaction Number is mandatory and the response from Klik & Pay has to be equal to '00'
            if( empty($numxkp) || $response !== '00' )
            {
                throw new \Exception('Error with return parameters from Klik & Pay.');
            }

            // Retrieve the order
            $order = $this->findOrder($commande);

            // Hash (Total without shipping)
            $klikandpay = new Klikandpay();
            $parameters = $klikandpay->getParameters($montantxkp - $order->getPostage(), $order->getCustomer());
            $hash = $klikandpay->getHash($parameters, $order->getRef());

            // Verify if we can trust the transaction
            if($hash !== $commande)
            {
                throw new \Exception("The secure hash does not match: " . $hash . " <> " . $commande);
            }

            // Verify if we can trust the transaction
            if($order->getStatusId() !== OrderStatusQuery::create()->findOneByCode(OrderStatus::CODE_NOT_PAID)->getId())
            {
                throw new \Exception("This order was already been paid: " . $order->getStatusId());
            }

            // Set order status as PAID
            $event = new OrderEvent($order);
            $event->setStatus(OrderStatusQuery::create()->findOneByCode(OrderStatus::CODE_PAID)->getId());
            $this->dispatch(TheliaEvents::ORDER_UPDATE_STATUS,$event);

            // Save Transaction number from Klik & Pay
            $order->setTransactionRef($numxkp);
            $order->save();

            // Save all the return values from Klikandpay
            $event = new KlikandpayReturnEvent(
                $this->getRequest()->query->get('DEVISEXKP'),
                $this->getRequest()->query->get('IPXKP'),
                $montantxkp,
                $numxkp,
                $order->getId(),
                $this->getRequest()->query->get('PAIEMENT'),
                $this->getRequest()->query->get('PAYSBXKP'),
                $this->getRequest()->query->get('PAYSRXKP'),
                $this->getRequest()->query->get('SCOREXKP'),
                $commande
            );
            $this->dispatch('action.createKlikandpayReturn', $event);

        } catch (\Exception $e) {
            // Configure LOG for Klikandpay
            $log = Tlog::getInstance();
            $log->setDestinations("\\Thelia\\Log\\Destination\\TlogDestinationFile");
            $log->setConfig("\\Thelia\\Log\\Destination\\TlogDestinationFile", 0, THELIA_ROOT."log".DS."log-klikandpay.txt");
            $log->error(sprintf('Klik&Pay confirmation page => URL: %s <> message: %s', $this->getRequest()->getUri() , $e->getMessage()));

            // Get log back to previous state
            $log->setDestinations("\\Thelia\\Log\\Destination\\TlogDestinationRotatingFile");
        }

        // We don't need to render the view
        die();
    }


    /**
     * Method used to retrieve an order (By default, we use the secure hash)
     *
     * @param $hash
     * @param $type
     *
     * @throws \Exception
     *
     * @return \Thelia\Model\Order $order  processed order
     */
    public function findOrder($hash, $type = '%order_hash%')
    {

        $order = null;

        switch (strtolower($type)) {
            case '%order_id%':
                $order = OrderQuery::create()->findPk($hash);
                break;
            case '%order_ref%':
                $order = OrderQuery::create()->filterByRef($hash)->findOne();
                break;
            case '%order_hash%':
                $order = OrderQuery::create()->filterByTransactionRef($hash)->findOne();
                break;
        }

        if($order === null)
        {
            throw new \Exception("We are unable to retrieve your order.");
        }

        return $order;
    }

}

