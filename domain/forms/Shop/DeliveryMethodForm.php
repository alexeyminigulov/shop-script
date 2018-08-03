<?php

namespace domain\forms\Shop;

use domain\entities\Shop\DeliveryMethod;
use yii\base\Model;

/**
 * @property string $name
 * @property string $slug
 * @property integer $parentId
 */
class DeliveryMethodForm extends Model
{
    public $id;
    public $name;
    public $cost;
    public $minWeight;
    public $maxWeight;
    public $sort;

    public function __construct(DeliveryMethod $deliveryMethod = null, $config = [])
    {
        if ($deliveryMethod) {
            $this->id = $deliveryMethod->id;
            $this->name = $deliveryMethod->name;
            $this->cost = $deliveryMethod->cost;
            $this->minWeight= $deliveryMethod->min_weight;
            $this->maxWeight = $deliveryMethod->max_weight;
            $this->sort = $deliveryMethod->sort;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name', 'cost', 'sort'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['cost', 'minWeight', 'maxWeight'], 'integer', 'min' => 0],
        ];
    }
}