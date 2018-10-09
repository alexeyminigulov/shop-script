<?php

/* @var $this \yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

use yii\widgets\LinkPager;
use frontend\widgets\ProductBadge;

?>
<?php if (count($dataProvider->getModels())): ?>
<div class="cat-view-grid" id="category_products_11">
    <div class="ty-pagination-container cm-pagination-container" id="pagination_contents">
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
<?php else: ?>
    <div class="ty-mainbox-body">
        <div class="ty-list-container">
            <p style="font-size: 14px;">Ничего не найдено</p>
        </div>
    </div>
<?php endif; ?>