<?php

namespace domain\entities\Shop\Product;

use domain\entities\Shop\Attribute\Attribute;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "shop_products".
 *
 * @property int $product_id
 * @property int $attribute_id
 * @property string $value
 *
 * @property Attribute $attribute0
 */
class Value extends ActiveRecord
{
    public static function create($productId, $attributeId, $valuation)
    {
        $value = new Value();
        $value->product_id = $productId;
        $value->attribute_id = $attributeId;
        $value->value = $valuation;

        return $value;
    }

    public function edit($value)
    {
        $this->value = $value;
    }

    public function rules()
    {
        return [
            [['product_id', 'attribute_id', 'value'], 'required'],
            [['product_id', 'attribute_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
        ];
    }

    /**
     * ====================== Relation =======================
     */

    public function getAttribute0()
    {
        return $this->hasOne(Attribute::className(), ['id' => 'attribute_id']);
    }

    public static function tableName()
    {
        return '{{%shop_values}}';
    }
}