<?php

/* @var $this \yii\web\View */
/* @var $category \domain\entities\Shop\Category */

use frontend\widgets\SubCategories;
use frontend\widgets\FiltersWidget;

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
        ]) ?>
    </div>
    <div class="row-fluid ">
        <?= $this->render('_bestsellers') ?>
    </div>
</div>