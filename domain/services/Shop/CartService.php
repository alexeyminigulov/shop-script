<?php

namespace domain\services\Shop;

use domain\cart\Cart;
use domain\cart\CartItem;
use domain\repositories\Shop\ProductRepository;

class CartService
{
    private $cart;
    private $repoProduct;

    public function __construct(Cart $cart, ProductRepository $productRepository)
    {
        $this->cart = $cart;
        $this->repoProduct = $productRepository;
    }

    public function getCart(): Cart
    {
        return $this->cart;
    }

    public function add($productId, $quantity): void
    {
        $product = $this->repoProduct->find($productId);

        $this->cart->add(new CartItem($product, $quantity));
    }

    public function delete($id): void
    {
        $this->cart->remove($id);
    }
}