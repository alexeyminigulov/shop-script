<?php

namespace domain\forms\Shop\Order;

use elisdn\compositeForm\CompositeForm;

/**
 * Class OrderForm
 * @property DeliveryForm $delivery
 * @property CustomerForm $customer
 */
class OrderForm extends CompositeForm
{
    public $note;

    public function __construct(int $weight, $config = [])
    {
        $this->delivery = new DeliveryForm($weight);
        $this->customer = new CustomerForm();

        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['note'], 'string'],
        ];
    }

    protected function internalForms()
    {
        return ['delivery', 'customer'];
    }
}