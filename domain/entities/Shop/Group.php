<?php

namespace domain\entities\Shop;

use Yii;

/**
 * This is the model class for table "shop_attribute_groups".
 *
 * @property int $id
 * @property string $name
 *
 * @property ShopAttributeGroupAssignments[] $shopAttributeGroupAssignments
 * @property ShopCategories[] $categories
 * @property ShopAttributes[] $shopAttributes
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop_attribute_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShopAttributeGroupAssignments()
    {
        return $this->hasMany(ShopAttributeGroupAssignments::className(), ['group_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(ShopCategories::className(), ['id' => 'category_id'])->viaTable('shop_attribute_group_assignments', ['group_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShopAttributes()
    {
        return $this->hasMany(ShopAttributes::className(), ['group_id' => 'id']);
    }
}
