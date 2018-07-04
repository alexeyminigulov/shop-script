<?php

namespace domain\entities\Shop\Product;

use Yii;

/**
 * This is the model class for table "shop_products".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $price
 *
 * @property ShopValues[] $shopValues
 * @property ShopAttributes[] $attributes0
 */
class Product extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'shop_products';
    }

    public function rules()
    {
        return [
            [['name', 'slug', 'price'], 'required'],
            [['price'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['slug'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShopValues()
    {
        return $this->hasMany(ShopValues::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributes0()
    {
        return $this->hasMany(ShopAttributes::className(), ['id' => 'attribute_id'])->viaTable('shop_values', ['product_id' => 'id']);
    }
}
