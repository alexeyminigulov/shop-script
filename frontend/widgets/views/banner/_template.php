<?php

/* @var $banner \domain\entities\Shop\Manager\Banner */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="ab-advanced-banner ty-banner__image-item shadow <?= $banner->color_scheme ?>"
     style="background: <?= $banner->background_img
         ? 'url('. $banner->getImageFileUrl('background_img') .')'
         : $banner->background_color ?>;margin:0px;">

    <div class="advanced-banner-content" style="min-height:400px">

        <?php if($banner->image): ?>
        <div class="advanced-banner-image right" style="line-height: 400px">
            <?= Html::img($banner->getImageFileUrl('image'), ['style' => 'max-height:400px;width:auto']) ?>
        </div>
        <?php endif; ?>

        <div class="advanced-banner-block left" style="padding:20px;padding-top:0;padding-bottom:0;">
            <div class="advanced-banner-mb" style="display:table-cell;height:400px;vertical-align:middle;">
                <div class="advanced-banner-title" style="font-size: 38px">
                    <?= Html::encode($banner->title) ?>
                </div>
                <div class="advanced-banner-text " style="font-size:14px;background: transparent">
                    <?= Html::encode($banner->description) ?>
                </div>
                <br>
                <?= Html::a($banner->button_title, $banner->button_url, ['class' => 'ty-btn ty-btn__primary']) ?>
            </div>
        </div>

    </div>

</div>