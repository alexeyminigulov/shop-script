<?php

namespace domain\services\Shop;

use domain\cart\Cart;
use domain\cart\CartItem;
use domain\entities\Shop\WishItem;
use domain\repositories\Shop\ProductRepository;
use domain\repositories\Shop\WishItemRepository;
use domain\repositories\UserRepository;

class WishItemService
{
    private $cart;
    private $repository;
    private $users;
    private $products;

    public function __construct(Cart $cart,
                                WishItemRepository $repository,
                                UserRepository $users,
                                ProductRepository $products)
    {
        $this->cart = $cart;
        $this->repository = $repository;
        $this->users = $users;
        $this->products = $products;
    }

    public function add($userId, $productId): WishItem
    {
        $user = $this->users->get($userId);
        $product = $this->products->find($productId);

        $wishItem = WishItem::create($userId, $product->id);
        $user->addWishItem($wishItem);

        $this->users->save($user);

        return $wishItem;
    }

    public function addToCart($userId, $wishItemId)
    {
        $user = $this->users->get($userId);
        $wishItem = $this->repository->find($wishItemId);
        $product = $wishItem->product;
        $this->cart->add(new CartItem($product, 1));
        $user->eraseWishItem($wishItem);
        $this->users->save($user);
    }

    public function delete($id): void
    {
        $wishItem = $this->repository->find($id);
        $user = $this->users->get($wishItem->user_id);
        $user->eraseWishItem($wishItem);

        $this->users->save($user);
    }
}