<?php

/* @var $product \domain\entities\Shop\Product\Product */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="ty-column4">
    <div class="ty-grid-list__item">
        <form action="http://demo.cs-cart.ru/stores/0074ef20992a3836/" method="post" name="product_form_140" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle  cm-processed-form">
            <div class="ty-grid-body">
                <div class="ty-grid-list__image">
                    <a href="http://demo.cs-cart.ru/stores/0074ef20992a3836/elektronika/mp3-pleery/audiosistemy-dlya-mp3/yamaha-pdx-11-db/">
                        <?= Html::img($product->mainPicture->getThumbFileUrl('picture', 'thumb_189_189'), [
                            'class' => 'ty-pict cm-image',
                            'alt' => '',
                            'title' => '',
                        ]) ?>
                    </a>
                    <div class="grid-list-buttons">
                        <div class="ty-quick-view-button">
                            <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="140" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/0074ef20992a3836/index.php?dispatch=products.quick_view&amp;product_id=140&amp;prev_url=index.php%3Fdispatch%3Dcategories.view%26category_id%3D180&amp;n_items=140%2C141%2C142%2C143%2C144" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                        </div>
                        <a class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button" data-ca-dispatch="dispatch[wishlist.add..140]">Отложить</a>
                        <a class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/0074ef20992a3836/index.php?dispatch=product_features.add_product&amp;product_id=140&amp;redirect_url=index.php%3Fdispatch%3Dcategories.view%26category_id%3D180" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>
                    </div>
                </div>
                <div class="grid-list__rating no-rating">
                    <i class="ty-icon-star-empty"></i>
                    <i class="ty-icon-star-empty"></i>
                    <i class="ty-icon-star-empty"></i>
                    <i class="ty-icon-star-empty"></i>
                    <i class="ty-icon-star-empty"></i>
                </div>
                <div class="ty-grid-list__item-name">
                    <bdi>
                        <a href="<?= Url::to(['shop/product/view', 'slug' => $product->slug]) ?>" class="product-title" title="Yamaha PDX-11 DB"><?= Html::encode($product->name) ?></a>
                    </bdi>
                </div>
                <div class="ty-grid-list__price ">
                    <span class="cm-reload-140 ty-price-update">
                        <span class="ty-price">
                            <bdi><span class="ty-price-num"><?= Html::encode($product->price) ?></span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi>
                        </span>
                    </span>
                </div>
                <div class="stock-grid ty-product-block__field-group">
                </div>
                <div class="ty-grid-list__control">
                    <div class="button-container">
                        <div class="cm-reload-140">
                            <a class="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn" href="<?= Url::to(['shop/cart/add', 'productId' => $product->id]) ?>" rel="nofollow">Купить</a>
                            <a class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__text ty-cr-product-button" href="<?= Url::to(['shop/order/index']) ?>" rel="nofollow">
                                <span>Купить в один клик</span>
                            </a>
                            <div class="hidden" title="Купить в один клик"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>