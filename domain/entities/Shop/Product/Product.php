<?php

namespace domain\entities\Shop\Product;

use domain\entities\Shop\Attribute\Attribute;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;
use Yii;

/**
 * This is the model class for table "shop_products".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $price
 * @property int $category_id
 *
 * @property Value[] $values
 * @property Attribute[] $attributes0
 */
class Product extends \yii\db\ActiveRecord
{
    public static function create($name, $slug, $price, $categoryId): self
    {
        $product = new Product();
        $product->name = $name;
        $product->slug = $slug;
        $product->price = $price;
        $product->category_id = $categoryId;

        return $product;
    }

    public function edit($name, $slug, $price)
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->price = $price;
    }

    public function assignmentValue(Value $value)
    {
        $values = $this->values;

        foreach ($values as &$val) {
            if($val->product_id == $value->product_id && $val->attribute_id == $value->attribute_id) {
                $val = $value;
                $this->values = $values;
                return;
            }
        }

        $values[] = $value;

        $this->values = $values;
    }

    /**
     * ====================== Relation =======================
     */

    public function getValues()
    {
        return $this->hasMany(Value::className(), ['product_id' => 'id']);
    }

    public function getAttributes0()
    {
        return $this->hasMany(Attribute::className(), ['id' => 'attribute_id'])->viaTable('shop_values', ['product_id' => 'id']);
    }

    public function behaviors()
    {
        return [
            [
                'class' => SaveRelationsBehavior::className(),
                'relations' => ['values'],
            ],
        ];
    }

    public static function tableName()
    {
        return 'shop_products';
    }
}
