<?php

namespace domain\entities\Shop;

use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property int $percent
 * @property string $name
 * @property int $from_date
 * @property int $to_date
 * @property bool $active
 * @property int $sort
 */
class Discount extends ActiveRecord
{
    const STATUS_ACTIVE = true;
    const STATUS_DRAFT = false;

    public static function create($percent, $name, $fromDate, $toDate, $sort): self
    {
        $discount = new static();
        $discount->percent = $percent;
        $discount->name = $name;
        $discount->from_date = $fromDate;
        $discount->to_date = $toDate;
        $discount->sort = $sort;
        $discount->active = self::STATUS_DRAFT;
        return $discount;
    }

    public function edit($percent, $name, $fromDate, $toDate, $sort): void
    {
        $this->percent = $percent;
        $this->name = $name;
        $this->from_date = $fromDate;
        $this->to_date = $toDate;
        $this->sort = $sort;
    }

    public function activate()
    {
        $this->active = self::STATUS_ACTIVE;
    }

    public function draft()
    {
        $this->active = self::STATUS_DRAFT;
    }

    public function isEnabled()
    {
        return $this->active;
    }

    public static function tableName()
    {
        return '{{%shop_discounts}}';
    }
}