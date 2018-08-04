<?php

namespace domain\services\Shop;

use domain\cart\Cart;
use domain\entities\Shop\Order;
use domain\entities\Shop\OrderItem;
use domain\forms\Shop\Order\OrderForm;
use domain\repositories\Shop\OrderRepository;
use domain\services\TransactionManager;

class OrderService
{
    private $repository;
    private $cart;
    private $transaction;

    public function __construct(OrderRepository $repository, Cart $cart, TransactionManager $transaction)
    {
        $this->repository = $repository;
        $this->cart = $cart;
        $this->transaction = $transaction;
    }

    public function create(OrderForm $form): Order
    {
        $order = Order::create(
            $form->userId,
            $form->paymentMethod,
            $form->cost,
            $form->note,
            $form->currentStatus,
            $form->cancelReason,
            $form->statusesJson,
            $form->delivery,
            $form->customer
        );

        $this->transaction->wrap(function () use ($order) {

            $this->repository->save($order);

            foreach ($this->cart->getItems() as $cartItem) {

                $orderItem = OrderItem::create(
                    $cartItem->getProduct()->id,
                    $cartItem->getProduct()->name,
                    $cartItem->getProduct()->code,
                    $cartItem->getProduct()->price,
                    $cartItem->getQuantity()
                );
                $order->assignOrderItem($orderItem);
            }

            $this->repository->save($order);
        });

        return $order;
    }
}