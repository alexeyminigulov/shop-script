<?php

/* @var $this \yii\web\View */
/* @var $cost \domain\cart\cost\Cost */
/* @var $cartItems \domain\cart\CartItem[] */

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="tygh-content clearfix">
    <div class="container-fluid  content-grid">
        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 breadcrumbs-grid">
                    <div id="breadcrumbs_10">
                        <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="ty-breadcrumbs clearfix">
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="http://demo.cs-cart.ru/stores/ca33079d2c5d3392/" class="ty-breadcrumbs__a">
                                   <bdi>Главная</bdi>
                                </a>
                            </span>
                            <span class="ty-breadcrumbs__slash">/</span>
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <span itemprop="item" class="ty-breadcrumbs__current">
                                   <bdi>Содержимое корзины</bdi>
                                </span>
                             </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid-row">
            <div class="row-fluid">
                <div class="span16 main-content-grid">
                    <div class="ty-mainbox-container clearfix">
                        <div class="ty-mainbox-body">
                            <form id="cart_form" name="checkout_form" class="cm-check-changes cm-processed-form" action="<?= Url::to(['shop/cart/recount']) ?>" method="get">
                                <h1 class="ty-mainbox-title">Содержимое корзины</h1>
                                <div>
                                    <div class="ty-mainbox-cart__body">
                                        <div id="cart_items">
                                            <table class="ty-cart-content ty-table">
                                                <thead>
                                                <tr>
                                                    <th class="ty-cart-content__title ty-left">Товар</th>
                                                    <th class="ty-cart-content__title ty-left">&nbsp;</th>
                                                    <th class="ty-cart-content__title ty-right">Цена за ед.</th>
                                                    <th class="ty-cart-content__title quantity-cell">Кол-во</th>
                                                    <th class="ty-cart-content__title ty-right">Итого</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($cartItems as $cartItem): ?>
                                                        <tr>
                                                            <td class="ty-cart-content__product-elem ty-cart-content__image-block">
                                                                <div class="ty-cart-content__image cm-reload-1386058436">
                                                                    <a href="<?= Url::to(['shop/product/view', 'slug' => $cartItem->getProduct()->slug]) ?>">
                                                                        <?= Html::img($cartItem->getProduct()->mainPicture->getThumbFileUrl('picture', 'thumb_120_120'), [
                                                                            'class' => 'ty-pict cm-image',
                                                                            'alt' => '',
                                                                            'title' => '',
                                                                        ]) ?>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;">
                                                                <a href="<?= Url::to(['shop/product/view', 'slug' => $cartItem->getProduct()->slug]) ?>" class="ty-cart-content__product-title"><?= $cartItem->getProduct()->name ?></a>
                                                                <a class=" ty-cart-content__product-delete ty-delete-big" href="<?= Url::to(['shop/cart/delete', 'id' => $cartItem->getId()]) ?>" title="Удалить">&nbsp;<i class="ty-delete-big__icon ty-icon-cancel-circle"></i></a>
                                                                <div class="ty-cart-content__sku ty-sku cm-hidden-wrapper">
                                                                    КОД:
                                                                    <span class="cm-reload-1386058436">
                                                                   <?= $cartItem->getProduct()->code ?>
                                                                </span>
                                                                </div>
                                                            </td>
                                                            <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-1386058436">
                                                                <bdi>
                                                                    <span class="ty-sub-price"><?= $cartItem->getProduct()->price ?></span>&nbsp;<span class="ty-sub-price"><span class="ty-rub">Р</span></span>
                                                                </bdi>
                                                            </td>
                                                            <td class="ty-cart-content__product-elem ty-cart-content__qty ">
                                                                <div class="quantity cm-reload-1386058436 changer">
                                                                    <div class="ty-center ty-value-changer cm-value-changer">
                                                                        <a class="cm-increase ty-value-changer__increase">+</a>
                                                                        <input type="text" size="3" name="cart_products[<?= $cartItem->getId() ?>][amount]" value="<?= $cartItem->getQuantity() ?>" class="ty-value-changer__input cm-amount">
                                                                        <a class="cm-decrease ty-value-changer__decrease">−</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-1386058436">
                                                                <bdi><span class="price"><?= $cartItem->getProduct()->price * $cartItem->getQuantity() ?></span>&nbsp;<span class="price"><span class="ty-rub">Р</span></span></bdi>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="ty-cart-total">
                                <div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
                                    <div class="ty-coupons__container">
                                        <div>
                                            <form class="cm-ajax cm-ajax-force cm-ajax-full-render cm-processed-form" name="coupon_code_form" action="http://demo.cs-cart.ru/stores/ca33079d2c5d3392/" method="post">
                                                <input type="hidden" name="result_ids" value="checkout*,cart_status*,cart_items,payment-methods">
                                                <input type="hidden" name="redirect_url" value="index.php?dispatch=checkout.cart">
                                                <div class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
                                                    <label for="coupon_field" class="hidden cm-required">Промо-код</label>
                                                    <input type="text" class="ty-input-text cm-hint" id="coupon_field" name="hint_coupon_code" size="40" value="Подарочный сертификат или промо-код">
                                                    <button title="Применить" class="ty-btn-go" type="submit">Применить</button>
                                                    <input type="hidden" name="dispatch" value="checkout.apply_coupon">
                                                </div>
                                                <input type="hidden" name="security_hash" class="cm-no-hide-input" value="1f6815f452bff50f0857b85ecc9fb2de">
                                            </form>
                                        </div>
                                        <ul class="ty-coupons__list ty-discount-info">
                                            <li class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></li>
                                            <li class="ty-coupons__item">
                                                <div id="applied_promotions">
                                                    <span class="ty-strong">Ваши бонусы</span>
                                                    <ul>
                                                        <li>Бесплатная доставка на заказ от 3000 руб.</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ty-cart-statistic ty-statistic-list">
                                        <li class="ty-cart-statistic__item ty-statistic-list-subtotal">
                                            <span class="ty-cart-statistic__title">Сумма</span>
                                            <span class="ty-cart-statistic__value"><bdi><span><?= $cost->getTotal() ?></span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                        </li>
                                        <li class="ty-cart-statistic__item ty-statistic-list-shipping-method">
                                            <span class="ty-cart-statistic__title">Стоимость доставки</span>
                                            <span class="ty-cart-statistic__value">
                                                <i class="ty-cart-total__icon-estimation ty-icon-flight"></i>
                                                <a class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" href="" rel="nofollow">Рассчитать</a>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    <ul class="ty-cart-statistic__total-list">
                                        <li class="ty-cart-statistic__item ty-cart-statistic__total">
                                            <span class="ty-cart-statistic__total-title">Итоговая стоимость</span>
                                            <span class="ty-cart-statistic__total-value"><bdi><span class="ty-price"><?= $cost->getTotal() ?></span>&nbsp;<span class="ty-price"><span class="ty-rub">Р</span></span></bdi></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="buttons-container ty-cart-content__bottom-buttons clearfix">
                                <div class="ty-float-left ty-cart-content__left-buttons">
                                    <a href="<?= Url::to(Yii::$app->request->referrer) ?>" class="ty-btn ty-btn__secondary ">Закрыть</a>
                                </div>
                                <div class="ty-float-right ty-cart-content__right-buttons">
                                    <button class="ty-btn ty-btn__secondary cm-external-click" type="submit" form="cart_form">Пересчитать</button>
                                    <a href="<?= Url::to(['shop/order/index']) ?>" class="ty-btn ty-btn__primary" rel="nofollow">Оформить заказ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>