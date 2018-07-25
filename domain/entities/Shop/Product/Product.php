<?php

namespace domain\entities\Shop\Product;

use domain\entities\Shop\Brand;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use domain\entities\Shop\Category;
use domain\entities\Shop\Attribute\Attribute;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;

/**
 * This is the model class for table "shop_products".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $price
 * @property int $category_id
 * @property int $brand_id
 * @property string $description
 *
 * @property Brand $brand
 * @property Value[] $values
 * @property Attribute[] $attributes0
 * @property Category $category
 */
class Product extends ActiveRecord
{
    public static function create($name, $slug, $price, $categoryId, $brandId, $description): self
    {
        $product = new Product();
        $product->name = $name;
        $product->slug = $slug;
        $product->price = $price;
        $product->category_id = $categoryId;
        $product->brand_id = $brandId;
        $product->description = $description;

        return $product;
    }

    public function edit($name, $slug, $price, $brandId, $description)
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->price = $price;
        $this->brand_id = $brandId;
        $this->description = $description;
    }

    public function assignmentValue(Value $value)
    {
        $values = $this->values;
        $values[] = $value;
        $this->values = $values;
    }

    public function eraseValues()
    {
        $this->values = [];
    }

    /**
     * ====================== Relation =======================
     */

    public function getValues()
    {
        return $this->hasMany(Value::className(), ['product_id' => 'id']);
    }

    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    public function getAttributes0()
    {
        return $this->hasMany(Attribute::className(), ['id' => 'attribute_id'])->viaTable('shop_values', ['product_id' => 'id']);
    }

    public function getCategory(): ActiveQuery
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
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
