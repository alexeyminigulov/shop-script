<?php

namespace domain\entities\Shop\Attribute;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "shop_brands".
 *
 * @property int $id
 * @property int $attribute_id
 * @property string $name
 */
class Unit extends ActiveRecord
{
    public static function create($name, $attributeId)
    {
        $unit = new self();
        $unit->name = $name;
        $unit->attribute_id = $attributeId;

        return $unit;
    }

    public function rules()
    {
        return [
            [['attribute_id', 'name'], 'required'],
        ];
    }

    public static function tableName()
    {
        return '{{%shop_type_units}}';
    }
}
