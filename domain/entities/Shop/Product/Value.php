<?php

namespace domain\entities\Shop\Product;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "shop_products".
 *
 * @property int $product_id
 * @property int $attribute_id
 * @property string $value
 */
class Value extends ActiveRecord
{
    public function rules()
    {
        return [
            [['product_id', 'attribute_id', 'value'], 'required'],
            [['product_id', 'attribute_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
        ];
    }

    public static function tableName()
    {
        return '{{%shop_values}}';
    }
}
