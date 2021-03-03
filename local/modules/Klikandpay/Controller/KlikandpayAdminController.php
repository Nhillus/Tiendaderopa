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

use Klikandpay\Form\ConfigKlikandpayForm;
use Thelia\Controller\Admin\BaseAdminController;
use Thelia\Core\Security\Resource\AdminResources;
use Thelia\Core\Security\AccessManager;
use Thelia\Model\ConfigQuery;


/**
 * Class KlikandpayAdminController
 * @package Klikandpay\Controller\Admin
 * @author Thelia <info@thelia.net>
 */
class KlikandpayAdminController extends BaseAdminController
{

    public function defaultAction()
    {
        if (null !== $response = $this->checkAuth(AdminResources::MODULE, array('Klikandpay'), AccessManager::VIEW))
        {
            return $response;
        }

        // Hydrate the klikandpay configuration form
        $klikandpayConfigForm = new ConfigKlikandpayForm($this->getRequest(), 'form', array(
            'klikandpay_identifiant'        => ConfigQuery::read('klikandpay_identifiant'),
            'klikandpay_url_test'           => ConfigQuery::read('klikandpay_url_test', 'https://www.klikandpay.com/paiementtest/check.pl'),
            'klikandpay_url_prod'           => ConfigQuery::read('klikandpay_url_prod', 'https://www.klikandpay.com/paiement/check.pl'),
            'klikandpay_mode'               => ConfigQuery::read('klikandpay_mode', 0),
            'klikandpay_montant_min'        => ConfigQuery::read('klikandpay_montant_min', 0),
            'klikandpay_montant_max'        => ConfigQuery::read('klikandpay_montant_max'),
            'klikandpay_retourvok'          => ConfigQuery::read('klikandpay_retourvok', '/%order_hash%'),
            'klikandpay_retourvhs'          => ConfigQuery::read('klikandpay_retourvhs', '/%order_hash%')
        ));

        $this->getParserContext()->addForm($klikandpayConfigForm);

        return $this->renderTemplate();
    }

    public function saveAction()
    {
        if (null !== $response = $this->checkAuth(AdminResources::MODULE, array('Klikandpay'), AccessManager::UPDATE))
        {
            return $response;
        }

        $error_msg = false;

        $klikandpayConfigForm = new ConfigKlikandpayForm($this->getRequest());

        try {
            $form = $this->validateForm($klikandpayConfigForm);

            $data = $form->getData();

            // Update Klik & Pay Configuration
            foreach ($data as $name => $value) {
                if(! in_array($name , array('success_url', 'error_message')))
                {
                    if(in_array($name , array('klikandpay_montant_min', 'klikandpay_montant_max')))
                    {
                        $value = $this->getFloat($value);
                    }

                    // Save
                    ConfigQuery::write($name, $value, false);
                }
            }

            $this->adminLogAppend(AdminResources::MODULE, AccessManager::UPDATE, "Klik & Pay configuration changed");

            if ($this->getRequest()->request->get('save_mode') == 'stay')
            {
                $this->redirectToRoute(
                    'admin.module.configure',
                    array(),
                    array (
                        'module_code'=> 'Klikandpay',
                        '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::configureAction'
                    )
                );
            }

            // Redirect to the success URL
            $this->redirect($klikandpayConfigForm->getSuccessUrl());

        } catch (\Exception $ex) {
            $error_msg = $ex->getMessage();
        }

        $this->setupFormErrorContext(
            $this->getTranslator()->trans("Klik & Pay configuration failed."),
            $error_msg,
            $klikandpayConfigForm,
            $ex
        );

        return $this->renderTemplate();
    }

    private function getFloat($ptString)
    {
        if (strlen($ptString) == 0)
        {
            return false;
        }

        $pString = str_replace(" ", "", $ptString);

        if (substr_count($pString, ",") > 1)
        {
            $pString = str_replace(",", "", $pString);
        }

        if (substr_count($pString, ".") > 1)
        {
            $pString = str_replace(".", "", $pString);
        }

        $commaset = strpos($pString,',');
        if ($commaset === false)
        {
            $commaset = -1;
        }

        $pointset = strpos($pString,'.');
        if ($pointset === false)
        {
            $pointset = -1;
        }

        $pregResultA = array();
        $pregResultB = array();

        if ($pointset < $commaset)
        {
            preg_match('#(([-]?[0-9]+(\.[0-9])?)+(,[0-9]+)?)#', $pString, $pregResultA);
        } else {
            preg_match('#(([-]?[0-9]+(,[0-9])?)+(\.[0-9]+)?)#', $pString, $pregResultB);
        }
        if ((isset($pregResultA[0]) && (!isset($pregResultB[0]) || !$pointset)))
        {
            $numberString = $pregResultA[0];
            $numberString = str_replace('.','',$numberString);
            $numberString = str_replace(',','.',$numberString);
        }
        elseif (isset($pregResultB[0]) && (!isset($pregResultA[0]) || !$commaset))
        {
            $numberString = $pregResultB[0];
            $numberString = str_replace(',','',$numberString);
        }
        else
        {
            return false;
        }

        $result = (float)$numberString;
        return $result;
    }

    protected function renderTemplate()
    {
        return $this->render(
            'module-configure',
            array(
                'module_code' => 'Klikandpay',
            )
        );
    }
}

