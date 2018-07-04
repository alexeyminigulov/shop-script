<?php

namespace domain\entities\Shop;

use Yii;

/**
 * This is the model class for table "shop_attributes".
 *
 * @property int $id
 * @property string $name
 * @property int $group_id
 *
 * @property ShopAttributeGroups $group
 * @property ShopValues[] $shopValues
 * @property ShopProducts[] $products
 */
class Attribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop_attributes';
    }

    public function rules()
    {
        return [
            [['group_id'], 'required'],
            [['group_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShopAttributeGroups::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'group_id' => 'Group ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(ShopAttributeGroups::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShopValues()
    {
        return $this->hasMany(ShopValues::className(), ['attribute_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(ShopProducts::className(), ['id' => 'product_id'])->viaTable('shop_values', ['attribute_id' => 'id']);
    }
}
