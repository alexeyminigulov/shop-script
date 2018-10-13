<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $wishItems[] \domain\entities\Shop\WishItem */

$this->title = 'Список желаний';
?>
<div class="row-fluid">
    <div class="span16 main-content-grid">
        <div class="ty-mainbox-container clearfix">
            <div class="ty-mainbox-body">
                <h1 class="ty-mainbox-title">Список желаний</h1>
                <div>
                    <div class="ty-mainbox-cart__body">
                        <div id="cart_items">
                            <table class="ty-cart-content ty-table">
                                <thead>
                                <tr>
                                    <th class="ty-cart-content__title ty-left">Товар</th>
                                    <th class="ty-cart-content__title ty-left">Название</th>
                                    <th class="ty-cart-content__title ty-right">Цена</th>
                                    <th class="ty-cart-content__title ty-right">Добавить в корзину</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                /* @var $wishItem \domain\entities\Shop\WishItem */
                                foreach ($wishItems as $wishItem): ?>
                                    <tr>
                                        <td class="ty-cart-content__product-elem ty-cart-content__image-block">
                                            <div class="ty-cart-content__image cm-reload-1386058436">
                                                <a href="<?= Url::to(['shop/product/view', 'slug' => $wishItem->product->slug]) ?>">
                                                    <?= Html::img($wishItem->product->mainPicture->getThumbFileUrl('picture', 'thumb_120_120'), [
                                                        'class' => 'ty-pict cm-image',
                                                        'alt' => '',
                                                        'title' => '',
                                                    ]) ?>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;">
                                            <?= Html::a($wishItem->product->name, ['shop/product/view', 'slug' => $wishItem->product->slug], [
                                                'class' => 'ty-cart-content__product-title',
                                            ]) ?>
                                            <?= Html::beginForm(['delete', 'id' => $wishItem->id], 'post', ['style' => 'display:inline;'])
                                                . Html::submitButton(
                                                '<i class="ty-delete-big__icon ty-icon-cancel-circle"></i>',
                                                    [
                                                        'class' => 'ty-cart-content__product-delete ty-delete-big',
                                                        'style' => 'background:none!important;color:inherit;border:none;padding:0!important;font: inherit;',
                                                        'data' => [
                                                            'confirm' => 'Вы действительно хотите удалить товар из списка желаний?',
                                                        ],
                                                    ]
                                                )
                                                . Html::endForm();
                                            ?>
                                            <div class="ty-cart-content__sku ty-sku cm-hidden-wrapper">
                                                КОД:
                                                <span class="cm-reload-1386058436">
                                                    <?= $wishItem->product->code ?>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-1386058436">
                                            <bdi>
                                                <span class="ty-sub-price">
                                                    <?= $wishItem->product->price ?>
                                                </span>
                                                &nbsp;
                                                <span class="ty-sub-price">
                                                    <span class="ty-rub">Р</span>
                                                </span>
                                            </bdi>
                                        </td>
                                        <td class="ty-cart-content__product-elem">
                                            <?= Html::a('В корзину', ['add-to-cart', 'id' => $wishItem->id], [
                                                'class' => 'ty-btn ty-btn__secondary',
                                                'style' => 'float:right;',
                                            ]) ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="buttons-container ty-cart-content__bottom-buttons clearfix">
                    <div class="ty-float-left ty-cart-content__left-buttons">
                        <a href="<?= Url::to(['site/index']) ?>" class="ty-btn ty-btn__secondary ">Закрыть</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
