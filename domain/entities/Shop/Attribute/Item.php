<?php

namespace domain\entities\Shop\Attribute;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "shop_brands".
 *
 * @property int $id
 * @property int $attribute_id
 * @property string $option
 */
class Item extends ActiveRecord
{
    public static function create($option, $attributeId)
    {
        $item = new self();
        $item->option = $option;
        $item->attribute_id = $attributeId;

        return $item;
    }

    public function edit($option)
    {
        $this->option = $option;
    }

    public function rules()
    {
        return [
            [['attribute_id', 'option'], 'required'],
        ];
    }

    public static function tableName()
    {
        return '{{%shop_type_list}}';
    }
}