<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Order;
use domain\exceptions\EntityNotFoundException;

class OrderRepository
{
    public function find($id): Order
    {
        $order = Order::findOne(['id', $id]);

        if (!$order) {
            throw new EntityNotFoundException('Order is not found.');
        }
        return $order;
    }

    public function findOwn($userId, $id)
    {
        $order = Order::find()->andWhere(['user_id' => $userId, 'id' => $id])->one();

        if (!$order) {
            throw new EntityNotFoundException('Order is not found.');
        }
        return $order;
    }

    public function save(Order $order, $runValidation = true)
    {
        if (!$order->save($runValidation)) {
            throw new \RuntimeException('Order did not save.');
        }
    }
}