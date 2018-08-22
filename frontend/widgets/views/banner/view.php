<?php

/* @var $banners \domain\entities\Shop\Manager\Banner[] */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div id="banner_slider_3956" class="banners owl-carousel">
    <?php foreach ($banners as $banner): ?>
        <div
            class="ab-advanced-banner ty-banner__image-item shadow light"
            style="background:  url('<?= $banner->getThumbFileUrl('background_img', 'thumb') ?>'); margin:0px;">
            <div class="advanced-banner-content" style="min-height:400px">
                <div class="advanced-banner-block   left" style="padding:20px;padding-top:0;padding-bottom:0;">
                    <div class="advanced-banner-mb" style="display:table-cell;height:400px;vertical-align:middle;">
                        <div class="advanced-banner-title" style="font-size: 38px">
                            <?= Html::encode($banner->title) ?>
                        </div>
                        <div class="advanced-banner-text " style="font-size:14px;background: transparent">
                            <?= Html::encode($banner->description) ?>
                        </div>
                        <br>
                        <a href="<?= $banner->button_url ?>" class="ty-btn ty-btn__primary" >
                            <?= Html::encode($banner->button_title) ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>