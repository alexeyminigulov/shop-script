<?php

/* @var $product \domain\entities\Shop\Product\Product */

use yii\helpers\Html;
use domain\helpers\ProductHelper;

?>

<div class="ty-column5">
    <div class="ty-grid-list__item">
        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_87000262" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle">
            <div class="ty-grid-body">
                <div class="ty-grid-list__image">
                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-by-dr.-dre-solo2-wireless-black/">
                        <?= Html::img(empty($product->mainPicture)
                            ? $product->getDefaultPicture()->getThumbFileUrl('picture', 'thumb_189_189')
                            : $product->mainPicture->getThumbFileUrl('picture', 'thumb_189_189'), [
                            'class' => 'ty-pict cm-image',
                            'alt' => '',
                            'title' => '',
                        ]) ?>
                    </a>
                    <span class="ty-discount-label   color3 cm-reload-87000262" id="discount_label_update_87000262">
                        <span class="ty-discount-label__item" id="line_prc_discount_value_87000262">
                            <span class="ty-discount-label__value" id="prc_discount_value_label_87000262">
                                Скидка<br><em>64%</em>
                            </span>
                        </span>
                    </span>
                    <div class="grid-list-buttons">
                        <div class="ty-quick-view-button">
                            <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="262" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=262&amp;prev_url=index.php&amp;n_plain=Y&amp;n_items=262%2C261%2C260%2C259%2C258" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">
                                Просмотр
                            </a>
                        </div>
                        <a class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button" data-ca-dispatch="dispatch[wishlist.add..262]">
                            Отложить
                        </a>
                        <a class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=262&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">
                            Сравнить
                        </a>
                    </div>
                </div>
                <div class="grid-list__rating">
                    <span class="ty-nowrap ty-stars">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-by-dr.-dre-solo2-wireless-black/?selected_section=discussion#discussion">
                            <i class="ty-stars__icon ty-icon-star"></i>
                            <i class="ty-stars__icon ty-icon-star"></i>
                            <i class="ty-stars__icon ty-icon-star"></i>
                            <i class="ty-stars__icon ty-icon-star"></i>
                            <i class="ty-stars__icon ty-icon-star-half"></i>
                        </a>
                    </span>
                    <span class="cn-comments">(2)</span>
                </div>
                <div class="ty-grid-list__item-name">
                    <bdi>
                        <?= Html::a(
                            $product->name,
                            ['shop/product/view', 'slug' => $product->slug],
                            [
                                'class' => 'product-title',
                                'title' => $product->name,
                            ]
                        ) ?>
                    </bdi>
                </div>
                <div class="ty-grid-list__price ">
                    <span class="cm-reload-87000262 ty-price-update">
                        <span class="ty-price">
                            <bdi>
                                <span class="ty-price-num"><?= ProductHelper::price($product->price) ?></span>
                            </bdi>
                        </span>
                    </span>
                    <span class="cm-reload-87000262 ty-list-price-block">
                        <span class="ty-list-price ty-nowrap">
                            <span class="ty-strike">
                                <bdi>
                                    <span class="ty-list-price ty-nowrap"><?= ProductHelper::price($product->price) ?></span>
                                </bdi>
                            </span>
                        </span>
                    </span>
                    <span class="cm-reload-87000262">
                        <span class="ty-list-price ty-save-price ty-nowrap color3"> Вы экономите:&nbsp;
                            <bdi>
                                <span><?= ProductHelper::price($product->price) ?></span>
                            </bdi>
                        </span>
                    </span>
                </div>
                <div class="stock-grid ty-product-block__field-group"></div>
                <div class="ty-grid-list__control"></div>
            </div>
        </form>
    </div>
</div>