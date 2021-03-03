<?php
/*************************************************************************************/
/*                                                                                   */
/*      Thelia	                                                                     */
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
/*	    along with this program. If not, see <http://www.gnu.org/licenses/>.         */
/*                                                                                   */
/*************************************************************************************/

namespace Klikandpay\Form;

use Klikandpay\Klikandpay;
use Symfony\Component\Validator\Constraints;
use Thelia\Core\Translation\Translator;
use Thelia\Form\BaseForm;

class ConfigKlikandpayForm extends BaseForm {
    /**
     *
     * in this function you add all the fields you need for your Form.
     * Form this you have to call add method on $this->formBuilder attribute :
     *
     * $this->formBuilder->add("name", "text")
     *   ->add("email", "email", array(
     *           "attr" => array(
     *               "class" => "field"
     *           ),
     *           "label" => "email",
     *           "constraints" => array(
     *               new \Symfony\Component\Validator\Constraints\NotBlank()
     *           )
     *       )
     *   )
     *   ->add('age', 'integer');
     *
     * @return null
     */
    protected function buildForm()
    {
        $this->formBuilder
            ->add('klikandpay_identifiant', 'text', array(
                    'constraints' => array(
                        new Constraints\NotBlank(),
                        new Constraints\Regex(array(
                            'pattern' => '/^[1-9][0-9]*$/',
                            'message' => Translator::getInstance()->trans('Your account ID is not valid (only alphanumeric characters and cannot start with a zero)'),
                        ))
                    ),
                    'label' => Translator::getInstance()->trans('Identifiant'),
                    'label_attr' => array(
                        'for' => 'klikandpay_identifiant'
                    )
                ))
            ->add('klikandpay_url_test', 'url', array(
                    'constraints' => array(
                        new Constraints\NotBlank(),
                        new Constraints\Url()
                    ),
                    'label' => Translator::getInstance()->trans('Test URL'),
                    'label_attr' => array(
                        'for' => 'klikandpay_url_test'
                    )
                ))
            ->add('klikandpay_url_prod', 'url', array(
                    'constraints' => array(
                        new Constraints\NotBlank(),
                        new Constraints\Url()
                    ),
                    'label' => Translator::getInstance()->trans('Prod URL'),
                    'label_attr' => array(
                        'for' => 'klikandpay_url_prod'
                    )
                ))
            ->add('klikandpay_mode', 'choice', array(
                    'constraints' => array(
                        new Constraints\NotBlank()
                    ),
                    'choices' => array(
                        Klikandpay::MODE_TEST => Translator::getInstance()->trans('Test'),
                        Klikandpay::MODE_PROD => Translator::getInstance()->trans('Prod')
                    ),
                    'label' => Translator::getInstance()->trans('Operating mode'),
                    'label_attr' => array(
                        'for' => 'klikandpay_mode'
                    )
                ))
            ->add('klikandpay_montant_min', 'text', array(
                    'constraints' => array(
                        new Constraints\Regex(array(
                            'pattern' =>  Klikandpay::AMOUNT_PATTERN,
                            'message' => Translator::getInstance()->trans('Your minimum amount is not valid.'),
                        ))
                    ),
                    'label' => Translator::getInstance()->trans('Minimum amount'),
                    'label_attr' => array(
                        'for' => 'klikandpay_montant_min'
                    ),
                    'required' => false
                ))
            ->add('klikandpay_montant_max', 'text', array(
                    'constraints' => array(
                        new Constraints\Regex(array(
                            'pattern' => Klikandpay::AMOUNT_PATTERN,
                            'message' => Translator::getInstance()->trans('Your maximum amount is not valid.'),
                        ))
                    ),
                    'label' => Translator::getInstance()->trans('Maximum amount'),
                    'label_attr' => array(
                        'for' => 'klikandpay_montant_max'
                    ),
                    'required' => false
                ))
            ->add('klikandpay_retourvok', 'text', array(
                    'constraints' => array(),
                    'label' => Translator::getInstance()->trans('Variable added to the return URL if the transaction is accepted'),
                    'label_attr' => array(
                        'for' => 'klikandpay_retourvok'
                    ),
                    'required' => false
                ))
            ->add('klikandpay_retourvhs', 'text', array(
                    'constraints' => array(),
                    'label' => Translator::getInstance()->trans('Variable added to the return URL if the transaction is declined'),
                    'label_attr' => array(
                        'for' => 'klikandpay_retourvhs'
                    ),
                    'required' => false,
                ))
        ;
    }

    /**
     * @return string the name of your form. This name must be unique
     */
    public function getName()
    {
        return 'klikandpay_configuration';
    }

}