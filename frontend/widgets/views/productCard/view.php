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
                <div class="ty-quick-view-button">
                    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size"
                       data-ca-view-id="166" data-ca-target-id="product_quick_view"
                       href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=166&amp;prev_url=index.php&amp;n_plain=Y"
                       data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                </div>
                <a class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button"
                   id="button_wishlist_101000166" data-ca-dispatch="dispatch[wishlist.add..166]">
                    Отложить
                </a>
                <a class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=166&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>
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