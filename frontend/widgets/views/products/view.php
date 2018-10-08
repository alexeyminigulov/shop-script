<?php

/* @var $this \yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

use yii\widgets\LinkPager;
use frontend\widgets\ProductBadge;

?>
<div class="cat-view-grid" id="category_products_11">
    <div class="ty-pagination-container cm-pagination-container" id="pagination_contents">
        <?php
//        echo $this->render('_sort-container')
        ?>
        <div class="grid-list ">
            <?php
            foreach ($dataProvider->getModels() as $product) {
                echo ProductBadge::widget([
                    'product' => $product,
                ]);
            }
            ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 text-left">
        <?= LinkPager::widget([
            'pagination' => $dataProvider->getPagination(),
        ]) ?>
    </div>
    <div class="col-sm-6 text-right">Showing <?= $dataProvider->getCount() ?> of <?= $dataProvider->getTotalCount() ?></div>
</div>