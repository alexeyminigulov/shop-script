<?php

namespace domain\entities\Shop;

use domain\entities\Shop\Order\Status;
use domain\entities\User;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use domain\entities\Shop\Order\CustomerData;
use domain\entities\Shop\Order\DeliveryData;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;
use yii\helpers\Json;

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
 * @property OrderItem $items
 * @property CustomerData $customerData
 * @property DeliveryData $deliveryData
 * @property array statuses
 */
class Order extends ActiveRecord
{
    public $customerData;
    public $deliveryData;
    public $statuses = [];

    public static function create($userId, CustomerData $customerData, array $orderItems, $cost, $note)
    {
        $order = new self();
        $order->user_id = $userId;
        $order->customerData = $customerData;
        $order->items = $orderItems;
        $order->cost = $cost;
        $order->note = $note;
        $order->addStatus(Status::NEW);

        return $order;
    }

    public function setDeliveryInfo(DeliveryMethod $method, DeliveryData $deliveryData): void
    {
        $this->delivery_method_id = $method->id;
        $this->delivery_method_name = $method->name;
        $this->delivery_cost = $method->cost;

        $this->deliveryData = $deliveryData;
    }

    private function addStatus($value): void
    {
        $this->statuses[] = new Status($value, time());
        $this->current_status = $value;
    }

    public function canBePaid()
    {
        return true;
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

    public function getItems()
    {
        return $this->hasMany(OrderItem::class, ['order_id' => 'id']);
    }

    public function behaviors(): array
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'updatedAtAttribute' => false,
            ],
            [
                'class' => SaveRelationsBehavior::className(),
                'relations' => ['items'],
            ],
        ];
    }

    public function afterFind(): void
    {
        $this->statuses = array_map(function ($row) {
            return new Status(
                $row['value'],
                $row['created_at']
            );
        }, Json::decode($this->getAttribute('statuses_json')));

        $this->customerData = new CustomerData(
            $this->getAttribute('customer_phone'),
            $this->getAttribute('customer_name')
        );

        $this->deliveryData = new DeliveryData(
            $this->getAttribute('delivery_index'),
            $this->getAttribute('delivery_address')
        );

        parent::afterFind();
    }

    public function beforeSave($insert): bool
    {
        $this->setAttribute('statuses_json', Json::encode(array_map(function (Status $status) {
            return [
                'value' => $status->value,
                'created_at' => $status->created_at,
            ];
        }, $this->statuses)));

        $this->setAttribute('customer_phone', $this->customerData->phone);
        $this->setAttribute('customer_name', $this->customerData->name);

        $this->setAttribute('delivery_index', $this->deliveryData->index);
        $this->setAttribute('delivery_address', $this->deliveryData->address);

        return parent::beforeSave($insert);
    }

    public static function tableName()
    {
        return '{{%shop_orders}}';
    }
}
