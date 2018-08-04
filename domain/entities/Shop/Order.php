<?php

namespace domain\entities\Shop;

use domain\entities\User;
use domain\forms\Shop\Order\CustomerForm;
use domain\forms\Shop\Order\DeliveryForm;
use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property int $created_at
 * @property int $user_id
 * @property int $delivery_method_id
 * @property string $delivery_method_name
 * @property int $delivery_cost
 * @property string $payment_method
 * @property int $cost
 * @property string $note
 * @property int $current_status
 * @property string $cancel_reason
 * @property string $statuses_json
 * @property string $customer_phone
 * @property string $customer_name
 * @property string $delivery_index
 * @property string $delivery_address
 *
 * @property OrderItem $orderItems
 */
class Order extends ActiveRecord
{
    public static function create(
        $userId,
        $paymentMethod,
        $cost,
        $note,
        $currentStatus,
        $cancelReason,
        $statusesJson,
        DeliveryForm $delivery,
        CustomerForm $customer
    ): self
    {
        $order = new self();
        $order->user_id = $userId;
        $order->payment_method = $paymentMethod;
        $order->cost = $cost;
        $order->note = $note;
        $order->current_status = $currentStatus;
        $order->cancel_reason = $cancelReason;
        $order->statuses_json = $statusesJson;

        $order->delivery_method_id = $delivery->deliveryMethodId;
        $order->delivery_method_name = $delivery->deliveryMethodName;
        $order->delivery_cost = $delivery->deliveryCost;

        $order->customer_phone = $customer->customerPhone;
        $order->customer_name = $customer->customerName;
        $order->delivery_index = $customer->deliveryIndex;
        $order->delivery_address = $customer->deliveryAddress;

        return $order;
    }

    public function assignOrderItem(OrderItem $orderItem)
    {
        $orderItems = $this->orderItems;
        $orderItems[] = $orderItem;
        $this->orderItems = $orderItems;
    }

    /**
     * ====================== Relation =======================
     */

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function getDeliveryMethod()
    {
        return $this->hasOne(DeliveryMethod::class, ['id' => 'delivery_method_id']);
    }

    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::class, ['id' => 'order_id']);
    }

    public static function tableName()
    {
        return '{{%shop_orders}}';
    }
}
