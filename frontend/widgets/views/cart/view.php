<?php

/* @var $items string */
/* @var $countProducts integer */
?>

<div class="top-cart-content ty-float-right">

    <div class="ty-dropdown-box" id="cart_status_3945">

        <div id="sw_dropdown_3945" class="ty-dropdown-box__title  cm-combination">
            <div>

                <?= $countProducts === 0 ? '<i class="ty-minicart__icon ty-icon-basket empty"><span class="basket-cart-amount">0</span></i>'
                    : '<i class="ty-minicart__icon ty-icon-basket filled"><span class="basket-cart-amount">' .$countProducts. '</span></i>' ?>
                <span class="ty-minicart-title empty-cart ty-hand"><small>Ваша</small>&nbsp;Корзина</span>
                <i class="ty-icon-down-micro"></i>

            </div>
        </div>

        <div id="dropdown_3945" class="cm-popup-box ty-dropdown-box__content hidden">

            <div class="cm-cart-content cm-cart-content-thumb cm-cart-content-delete">
                <div class="ty-cart-items">
                    <?= $items ?>
                </div>

                <div class="cm-cart-buttons ty-cart-content__buttons buttons-container hidden">
                    <div class="ty-float-left">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/cart/" rel="nofollow" class="ty-btn ty-btn__secondary">Корзина</a>
                    </div>
                    <div class="ty-float-right">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/checkout/" rel="nofollow" class="ty-btn ty-btn__primary">Оформить заказ</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>