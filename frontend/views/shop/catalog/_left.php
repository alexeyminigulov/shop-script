<?php

/* @var $this \yii\web\View */
/* @var $category \domain\entities\Shop\Category */
/* @var $model \domain\forms\Shop\Search\SearchForm */

use frontend\widgets\SubCategories;
use frontend\widgets\FiltersWidget;
use frontend\widgets\BestSellersWidget;

?>

<div class="span4 side-grid cat-sub-col">
    <div class="row-fluid ">
        <?= SubCategories::widget([
                'category' => $category,
        ]) ?>
    </div>
    <div class="row-fluid ">
        <?= FiltersWidget::widget([
            'category' => $category,
            'model' => $model,
        ]) ?>
    </div>
    <div class="row-fluid ">
        <?= BestSellersWidget::widget() ?>
    </div>
</div>