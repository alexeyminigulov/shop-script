<?php

namespace frontend\widgets;

use Yii;
use domain\cart\CartItem;
use domain\cart\Cart;
use yii\base\Widget;

class CartWidget extends Widget
{
    /* @var $cart Cart */
    private $cart;

    public function init()
    {
        parent::init();
        $this->cart = Yii::$container->get(Cart::class);
    }

    public function run()
    {
        $items = $this->cart->getItems();

        if (empty($items)) {
            $itemsTpl = '<div class="ty-cart-items__empty ty-center">Корзина</div>';

        } else {
            $itemsTpl = $this->getItemsTemplate($items);
        }

        $result = $this->getTemplate($itemsTpl);

        return $result;
    }

    private function getTemplate($result)
    {
        $countProducts = count($this->cart->getItems());
        return $this->render('cart/view', [
            'items' => $result,
            'countProducts' => $countProducts,
        ]);
    }

    private function getItemsTemplate(array $cartItem)
    {
        $items = '';
        /* @var $item CartItem */
        foreach ($cartItem as $item) {
            $items .= $this->render('cart/item', [
                'item' => $item,
            ]);
        }

        return '<ul class="ty-cart-items__list">'. $items .'</ul>';
    }
}