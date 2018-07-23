<?php

/* @var $this \yii\web\View */
/* @var $products \domain\entities\Shop\Product\Product[] */

?>
<div class="cat-view-grid" id="category_products_11">
    <div class="ty-pagination-container cm-pagination-container" id="pagination_contents">
        <?= $this->render('_sort-container') ?>
        <div class="grid-list ">
            <?php
            foreach ($products as $product) {
                echo $this->render('_product', [
                        'product' => $product,
                ]);
            }
            ?>
        </div>
    </div>
</div>