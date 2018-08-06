<?php

namespace domain\entities\Shop;

use yii\db\ActiveRecord;
use domain\entities\Shop\Product\Product;

/**
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string $product_name
 * @property string $product_code
 * @property int $price
 * @property int $quantity
 */
class OrderItem extends ActiveRecord
{
    public static function create(Product $product, $price, $quantity): self
    {
        $orderItem = new self();
        $orderItem->product_id = $product->id;
        $orderItem->product_name = $product->name;
        $orderItem->product_code = $product->code;
        $orderItem->price = $price;
        $orderItem->quantity = $quantity;

        return $orderItem;
    }

    public function getCost()
    {
        return $this->price * $this->quantity;
    }

    /**
     * ====================== Relation =======================
     */

    public function getOrder()
    {
        return $this->hasOne(Order::class, ['id' => 'order_id']);
    }

    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }

    public static function tableName()
    {
        return '{{%shop_order_items}}';
    }
}
