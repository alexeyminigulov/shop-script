<?php

namespace domain\services\Shop;

use domain\cart\Cart;
use domain\cart\CartItem;
use domain\repositories\Shop\ProductRepository;

class CartService
{
    private $cart;
    private $products;

    public function __construct(Cart $cart, ProductRepository $products)
    {
        $this->cart = $cart;
        $this->products = $products;
    }

    public function getCart(): Cart
    {
        return $this->cart;
    }

    public function add($productId, $quantity): void
    {
        $product = $this->products->find($productId);

        $this->cart->add(new CartItem($product, $quantity));
    }

    public function set($id, $quantity): void
    {
        $this->cart->set($id, $quantity);
    }

    public function delete($id): void
    {
        $this->cart->remove($id);
    }
}