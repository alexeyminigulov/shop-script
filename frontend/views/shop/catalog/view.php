<?php

/* @var $this \yii\web\View */
/* @var $category \domain\entities\Shop\Category */
/* @var $categories \domain\entities\Shop\Category[] */
/* @var $dataProvider \yii\data\ActiveDataProvider */
/* @var $model \domain\forms\Shop\Search\SearchForm */

?>

<div class="tygh-content clearfix">
    <div class="container-fluid content-grid categories_grid">
        <div class="container-fluid-row">
            <div class="row-fluid ">

                <?= $this->render('_main-content', [
                    'category' => $category,
                    'categories' => $categories,
                    'dataProvider' => $dataProvider,
                ]) ?>

                <?= $this->render('_left', [
                    'category' => $category,
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>