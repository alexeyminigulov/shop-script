<?php

/* @var $this \yii\web\View */
/* @var $category \domain\entities\Shop\Category */
/* @var $categories \domain\entities\Shop\Category[] */
/* @var $products \domain\entities\Shop\Product\Product[] */

?>

<div class="tygh-content clearfix">
    <div class="container-fluid content-grid categories_grid">
        <div class="container-fluid-row">
            <div class="row-fluid ">

                <?= $this->render('_main-content', [
                    'category' => $category,
                    'categories' => $categories,
                    'products' => $products,
                ]) ?>

                <?= $this->render('_left', [
                        'category' => $category,
                ]) ?>
            </div>
        </div>
    </div>
</div>