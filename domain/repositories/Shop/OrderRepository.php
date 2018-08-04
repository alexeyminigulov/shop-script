<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Order;
use domain\exceptions\EntityNotFoundException;

class OrderRepository
{
    public function find($id): Order
    {
        $brand = Order::findOne(['id', $id]);

        if (!$brand) {
            throw new EntityNotFoundException('Order is not found.');
        }
        return $brand;
    }

    public function save(Order $order, $runValidation = true)
    {
        if (!$order->save($runValidation)) {
            throw new \RuntimeException('Order did not save.');
        }
    }
}