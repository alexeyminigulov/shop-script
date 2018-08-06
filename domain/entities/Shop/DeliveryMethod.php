<?php

namespace domain\entities\Shop;

use Yii;
use domain\entities\Shop\Queries\DeliveryQuery;
use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $name
 * @property int $cost
 * @property int $min_weight
 * @property int $max_weight
 * @property int $sort
 */
class DeliveryMethod extends ActiveRecord
{
    public static function create($name, $cost, $sort, $minWeight = null, $maxWeight = null): self
    {
        $delivery = new self();
        $delivery->name = $name;
        $delivery->cost = $cost;
        $delivery->sort = $sort;
        $delivery->min_weight = $minWeight;
        $delivery->max_weight = $maxWeight;

        return $delivery;
    }

    public function edit($name, $cost, $sort, $minWeight = null, $maxWeight = null)
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->sort = $sort;
        $this->min_weight = $minWeight;
        $this->max_weight = $maxWeight;
    }

    /**
     * @return object|\domain\entities\Shop\Queries\DeliveryQuery
     * @throws \yii\base\InvalidConfigException
     */
    public static function find(): DeliveryQuery
    {
        return Yii::createObject(DeliveryQuery::class, [get_called_class()]);
    }

    public static function tableName()
    {
        return '{{%shop_delivery_methods}}';
    }
}
