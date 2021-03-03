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

namespace Klikandpay\Event;

use Thelia\Core\Event\ActionEvent;


/**
 * Class KlikandpayReturnEvent
 * @package Klikandpay\Event
 * @author Thelia <info@thelia.net>
 */
class KlikandpayReturnEvent extends ActionEvent
{
    protected $transaction;
    protected $order_id;
    protected $numxkp;
    protected $paiement;
    protected $montantxkp;
    protected $devisexkp;
    protected $ipxkp;
    protected $paysrxkp;
    protected $scrorexkp;
    protected $paysbxkp;

    function __construct(
        $devisexkp,
        $ipxkp,
        $montantxkp,
        $numxkp,
        $order_id,
        $paiement,
        $paysbxkp,
        $paysrxkp,
        $scrorexkp,
        $transaction
    ) {
        $this->devisexkp = $devisexkp;
        $this->ipxkp = $ipxkp;
        $this->montantxkp = $montantxkp;
        $this->numxkp = $numxkp;
        $this->order_id = $order_id;
        $this->paiement = $paiement;
        $this->paysbxkp = $paysbxkp;
        $this->paysrxkp = $paysrxkp;
        $this->scrorexkp = $scrorexkp;
        $this->transaction = $transaction;
    }


    /**
     * @param mixed $devisexkp
     */
    public function setDevisexkp($devisexkp)
    {
        $this->devisexkp = $devisexkp;
    }

    /**
     * @return mixed
     */
    public function getDevisexkp()
    {
        return $this->devisexkp;
    }

    /**
     * @param mixed $ipxkp
     */
    public function setIpxkp($ipxkp)
    {
        $this->ipxkp = $ipxkp;
    }

    /**
     * @return mixed
     */
    public function getIpxkp()
    {
        return $this->ipxkp;
    }

    /**
     * @param mixed $montantxkp
     */
    public function setMontantxkp($montantxkp)
    {
        $this->montantxkp = $montantxkp;
    }

    /**
     * @return mixed
     */
    public function getMontantxkp()
    {
        return $this->montantxkp;
    }

    /**
     * @param mixed $numxkp
     */
    public function setNumxkp($numxkp)
    {
        $this->numxkp = $numxkp;
    }

    /**
     * @return mixed
     */
    public function getNumxkp()
    {
        return $this->numxkp;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $paiement
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;
    }

    /**
     * @return mixed
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * @param mixed $paysbxkp
     */
    public function setPaysbxkp($paysbxkp)
    {
        $this->paysbxkp = $paysbxkp;
    }

    /**
     * @return mixed
     */
    public function getPaysbxkp()
    {
        return $this->paysbxkp;
    }

    /**
     * @param mixed $paysrxkp
     */
    public function setPaysrxkp($paysrxkp)
    {
        $this->paysrxkp = $paysrxkp;
    }

    /**
     * @return mixed
     */
    public function getPaysrxkp()
    {
        return $this->paysrxkp;
    }

    /**
     * @param mixed $scrorexkp
     */
    public function setScrorexkp($scrorexkp)
    {
        $this->scrorexkp = $scrorexkp;
    }

    /**
     * @return mixed
     */
    public function getScrorexkp()
    {
        return $this->scrorexkp;
    }

    /**
     * @param mixed $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

}

