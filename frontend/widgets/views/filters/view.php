<?php

/* @var $this \yii\web\View */
/* @var $tplFilters string */

use yii\helpers\Url;
use Yii;

?>

<div class="span16 abt__ut__flying_block cat-product-filters">
    <div class="ty-mainbox-container clearfix">
        <div class="ty-mainbox-title">
            Фильтры товаров
        </div>
        <div class="ty-mainbox-body">
            <div class="cm-product-filters"
                 id="product_filters_39">
                <div class="ty-product-filters__wrapper">
                    <form action="<?= Url::to(['shop/catalog/search']) ?>" method="get">

                        <input type="text" hidden name="slug" value="<?= Yii::$app->request->get('slug') ?>">
                        <?= $tplFilters ?>
                        <div class="ty-product-filters__tools clearfix">
                            <button class="button btn-product-filter" type="submit">Найти</button>
                            <a href="http://demo.cs-cart.ru/" rel="nofollow"
                               class="button btn-product-filter ty-product-filters__reset-button cm-ajax cm-ajax-full-render cm-history"
                               data-ca-event="ce.filtersinit" data-ca-scroll=".ty-mainbox-title">Сбросить</a>
                            <a href="" rel="nofollow" class="ty-btn ty-btn__secondary ty-product-filters__close-button cm-ajax hidden-desktop hidden-tablet"
                               data-ca-scroll=".ty-mainbox-title"><i class="ty-icon-cancel-circle"></i> Закрыть</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>