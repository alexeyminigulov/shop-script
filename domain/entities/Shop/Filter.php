<?php

namespace domain\entities\Shop;

use yii\db\ActiveRecord;
use domain\entities\Shop\Attribute\Attribute;

/**
 * This is the model class for table "shop_filters".
 *
 * @property int $id
 * @property string $name
 * @property int $attribute_id
 * @property int $status
 *
 * @property Attribute $attribute0
 */
class Filter extends ActiveRecord
{
    const STATUS_ACTIVE = 10;
    const STATUS_HIDE = 0;

    public static function create($name, $attributeId): self
    {
        $filter = new self();
        $filter->name = $name;
        $filter->attribute_id = $attributeId;
        $filter->status = self::STATUS_ACTIVE;

        return $filter;
    }

    public function edit($name)
    {
        $this->name = $name;
    }

    public static function tableName()
    {
        return '{{%shop_filters}}';
    }

    /**
     *  ========================== Relation ===========================
     */

    public function getAttribute0()
    {
        $this->hasOne(Attribute::className(), ['id' => 'attribute_id']);
    }
}
