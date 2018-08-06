<?php

namespace domain\services\Shop;

use domain\cart\Cart;
use domain\cart\CartItem;
use domain\entities\Shop\Order;
use domain\entities\Shop\OrderItem;
use domain\forms\Shop\Order\OrderForm;
use domain\repositories\Shop\DeliveryMethodRepository;
use domain\repositories\Shop\OrderRepository;
use domain\repositories\Shop\ProductRepository;
use domain\repositories\UserRepository;
use domain\services\TransactionManager;

class OrderService
{
    private $repository;
    private $users;
    private $deliveryMethods;
    private $orders;
    private $products;
    private $cart;
    private $transaction;

    public function __construct(OrderRepository $repository,
                                UserRepository $users,
                                DeliveryMethodRepository $deliveryMethods,
                                OrderRepository $orders,
                                ProductRepository $products,
                                Cart $cart,
                                TransactionManager $transaction)
    {
        $this->repository = $repository;
        $this->users = $users;
        $this->deliveryMethods = $deliveryMethods;
        $this->orders = $orders;
        $this->products = $products;
        $this->cart = $cart;
        $this->transaction = $transaction;
    }

    public function checkout($userId, OrderForm $form): Order
    {
        $user = $this->users->get($userId);

        $products = [];

        $items = array_map(function (CartItem $item) use (&$products) {
            $product = $item->getProduct();
            $product->checkout($item->getQuantity());
            $products[] = $product;
            return OrderItem::create(
                $product,
                $item->getPrice(),
                $item->getQuantity()
            );
        }, $this->cart->getItems());

        $order = Order::create(
            $user->id,
            new Order\CustomerData(
                $form->customer->phone,
                $form->customer->name
            ),
            $items,
            $this->cart->getCost()->getTotal(),
            $form->note
        );

        $order->setDeliveryInfo(
            $this->deliveryMethods->get($form->delivery->method),
            new Order\DeliveryData(
                $form->delivery->index,
                $form->delivery->address
            )
        );

        $this->transaction->wrap(function () use ($order, $products) {
            $this->orders->save($order);
            foreach ($products as $product) {
                $this->products->save($product);
            }
            $this->cart->clear();
        });

        return $order;
    }
}