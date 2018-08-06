<?php

namespace domain\forms\Shop\Order;

use domain\entities\Shop\DeliveryMethod;
use domain\helpers\ProductHelper;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class DeliveryForm extends Model
{
    public $method;
    public $index;
    public $address;

    private $_weight;

    public function __construct(int $weight, array $config = [])
    {
        $this->_weight = $weight;
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['index', 'address'], 'required'],
            [['method'], 'integer'],
            [['index', 'address'], 'string', 'max' => 255],
        ];
    }

    public function deliveryMethodsList(): array
    {
        $methods = DeliveryMethod::find()->availableForWeight($this->_weight)->orderBy('sort')->all();

        return ArrayHelper::map($methods, 'id', function (DeliveryMethod $method) {
            return $method->name . ' (' . ProductHelper::price($method->cost) . ')';
        });
    }
}