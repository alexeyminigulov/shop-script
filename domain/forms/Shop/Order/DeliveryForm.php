<?php

namespace domain\forms\Shop\Order;

use yii\base\Model;

class DeliveryForm extends Model
{
    public $deliveryMethodId;
    public $deliveryMethodName;
    public $deliveryCost;

    public function rules()
    {
        return [
            [['deliveryMethodId', 'deliveryMethodName', 'deliveryCost'], 'required'],
            [['deliveryMethodId', 'deliveryCost'], 'integer'],
            [['deliveryMethodName'], 'string', 'max' => 255],
        ];
    }
}