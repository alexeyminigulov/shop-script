<?php

namespace domain\forms\Shop\Order;

use yii\base\Model;

class CustomerForm extends Model
{
    public $customerPhone;
    public $customerName;
    public $deliveryIndex;
    public $deliveryAddress;

    public function rules()
    {
        return [
            [['customerPhone', 'customerName', 'deliveryIndex', 'deliveryAddress'], 'required'],
            [['customerPhone', 'customerName', 'deliveryIndex', 'deliveryAddress'], 'string', 'max' => 255],
        ];
    }
}