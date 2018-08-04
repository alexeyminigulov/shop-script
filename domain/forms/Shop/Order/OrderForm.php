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
    public $userId;
    public $paymentMethod;
    public $cost;
    public $note;
    public $currentStatus;
    public $cancelReason;
    public $statusesJson;

    public function __construct($config = [])
    {
        $this->delivery = new DeliveryForm();
        $this->customer = new CustomerForm();

        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['userId', 'paymentMethod', 'cost', 'note', 'currentStatus', 'cancelReason', 'statusesJson'], 'required'],
            [['userId', 'cost', 'currentStatus'], 'integer'],
            [['paymentMethod', 'note', 'cancelReason', 'statusesJson'], 'string', 'max' => 255],
        ];
    }

    protected function internalForms()
    {
        return ['delivery', 'customer'];
    }
}