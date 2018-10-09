<?php

/* @var $product \domain\entities\Shop\Product\Product */

use yii\helpers\Html;
use yii\helpers\Url;
use domain\helpers\ProductHelper;
use frontend\widgets\RatingStars;
?>
<div class="ty-grid-list__item">
    <form action="http://demo.cs-cart.ru"
          method="post" name="product_form_101000166"
          enctype="multipart/form-data"
          class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle">

        <div class="ty-grid-list__image">
            <a href="<?= Url::to(['shop/product/product/view', 'slug' => $product->slug]) ?>">
                <?= Html::img($product->mainPicture->getThumbFileUrl('picture', 'thumb_189_189'), [
                    'class' => 'ty-pict cm-image',
                    'alt' => '',
                    'title' => '',
                ]) ?>
            </a>
            <span class="ty-discount-label color3 cm-reload-101000166">
                <span class="ty-discount-label__item">
                    <span class="ty-discount-label__value">Скидка<br><em>53%</em></span>
                </span>
            </span>
            <div class="grid-list-buttons">
                <a class="ty-btn ty-btn__text ty-add-to-wish text-button"
                   href="<?= Url::to(['cabinet/wishlist/add', 'id' => $product->id])?>">
                    Отложить
                </a>
            </div>
        </div>

        <div class="grid-list__rating">
            <?= RatingStars::widget(['rating' => $product->rating]) ?>
        </div>

        <div class="ty-grid-list__item-name">
            <a href="<?= Url::to(['shop/product/product/view', 'slug' => $product->slug]) ?>" class="product-title" title="<?= Html::encode($product->name) ?>" >
                <?= Html::encode($product->name) ?>
            </a>
        </div>

        <div class="ty-grid-list__price ">
                <span class="cm-reload-101000166 ty-price-update">
                    <span class="ty-price" id="line_discounted_price_101000166">
                        <bdi>
                            <span class="ty-price-num"><?= ProductHelper::price($product->price) ?></span>
                        </bdi>
                    </span>
                </span>
            <span class="cm-reload-101000166 ty-list-price-block">
                    <span class="ty-list-price ty-nowrap">
                        <span class="ty-strike">
                            <bdi>
                                <span class="ty-list-price ty-nowrap"><?= ProductHelper::price($product->price) ?></span>
                            </bdi>
                        </span>
                    </span>
                </span>
            <span class="cm-reload-101000166">
                <span class="ty-list-price ty-save-price ty-nowrap color3">Вы экономите:&nbsp;
                    <bdi>
                        <span><?= ProductHelper::price($product->price) ?></span>
                    </bdi>
                </span>
            </span>
        </div>

        <div class="stock-grid ty-product-block__field-group"></div>
        <div class="ty-grid-list__control"></div>

    </form>
</div>