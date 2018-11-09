<?php

/* @var $index integer */
/* @var $product \domain\entities\Shop\Product\Product[] */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<li class="ty-template-small__item clearfix">
    <div class="ty-template-small__item-img">
        <div class="hit-label">
            <?= $index ?>
        </div>
        <a href="<?= Url::to(['shop/product/product/view', 'slug' => $product->slug]) ?>">
            <?= Html::img($product->mainPicture->getThumbFileUrl('picture', 'thumb_50_50'), [
                'class' => 'ty-pict cm-image',
                'alt' => '',
                'title' => '',
            ]) ?>
        </a>
    </div>
    <div class="ty-template-small__item-description">
        <bdi>
            <a href="<?= Url::to(['shop/product/product/view', 'slug' => $product->slug]) ?>" class="product-title" title="<?= Html::encode($product->name) ?>">
                <?= Html::encode($product->name) ?>
            </a>
        </bdi>
    </div>
</li>
