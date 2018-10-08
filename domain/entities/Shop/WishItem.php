<?php

namespace domain\entities\Shop;

use yii\db\ActiveRecord;
use domain\entities\User\User;
use domain\entities\Shop\Product\Product;

/**
 * Class WishItem
 * @package domain\entities\Shop
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $product_id
 *
 * @property User    $user
 * @property Product $product
 */
class WishItem extends ActiveRecord
{
    public static function create($userId, $productId): self
    {
        $wishItem = new static();
        $wishItem->user_id = $userId;
        $wishItem->product_id = $productId;

        return $wishItem;
    }

    public function edit($userId, $productId)
    {
        $this->user_id = $userId;
        $this->product_id = $productId;
    }

    public static function tableName()
    {
        return '{{%shop_wish_items}}';
    }

    /**
     * ====================== Relation =======================
     */

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}