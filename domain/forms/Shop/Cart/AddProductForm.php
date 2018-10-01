<?php

namespace domain\forms\Shop\Cart;

use yii\base\Model;

class AddProductForm extends Model
{
    public $productCode;
    public $amount;

    public function rules()
    {
        return [
            [['productCode'], 'required'],
            [['productCode', 'amount'], 'integer', 'min' => 1],
            [['amount'], 'default', 'value'=> 1],
        ];
    }
}