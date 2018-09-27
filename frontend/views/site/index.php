<?php

/* @var $this \yii\web\View */
/* @var $products \domain\entities\Shop\Product\Product[] */

use frontend\widgets\ProductCarousel;
use frontend\widgets\BannerWidget;

?>
<div class="tygh-content clearfix">
    <div class="container-fluid  content-grid">

        <div class="container-fluid-row container-fluid-row-no-limit fullwidth-page-banners">
            <div class="row-fluid ">
                <div class="span16 ">
                    <?= BannerWidget::widget() ?>
                </div>
            </div>
        </div>

        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 pd-all tabs-wrap">
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <div class="ty-mainbox-container clearfix">
                                <div class="ty-mainbox-title">
                                    Хиты продаж / Бестселлеры
                                </div>
                                <div class="ty-mainbox-body">
                                    <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid ">
                        <div class="span16 ">

                            <div class="cm-tabs-content ty-tabs__content clearfix" id="tabs_content">
                                <div id="content_ab__grid_tab_4437_101"><?= ProductCarousel::widget() ?></div>
                                <div id="content_ab__grid_tab_4437_100"><span></span></div>
                                <div id="content_ab__grid_tab_4437_102"><span></span></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-row container-fluid-row-full-width pd-bottom">
            <div class="row-fluid ">
                <div class="span16 ">
                    <div class="ty-mainbox-container clearfix">
                        <div class="ty-mainbox-title">
                            Новинки в магазине
                        </div>
                        <div class="ty-mainbox-body">

                            <div class="grid-list no-buttons">

                                <?php foreach ($products as $product): ?>

                                <?= $this->render('_product', ['product' => $product]) ?>

                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>