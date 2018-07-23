<?php

/* @var $this \yii\web\View */
/* @var $category \domain\entities\Shop\Category */
/* @var $categories \domain\entities\Shop\Category[] */
/* @var $products \domain\entities\Shop\Product\Product[] */

use yii\helpers\Html;
use frontend\widgets\BreadCrumbs;

?>

<div class="span12 main-content-grid">
    <div class="ty-mainbox-container clearfix">
        <h1 class="ty-mainbox-title">
            <span><?= Html::encode($category->name) ?></span>
        </h1>
        <div class="ty-mainbox-body">
            <?= BreadCrumbs::widget([
                'categories' => $categories,
            ]) ?>

            <?= $this->render('_category-products', [
                'products' => $products,
            ]) ?>
        </div>
    </div>
</div>