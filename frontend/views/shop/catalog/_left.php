<?php

/* @var $this \yii\web\View */

?>

<div class="span4 side-grid cat-sub-col">
    <div class="row-fluid ">
        <?= $this->render('_subcategories') ?>
    </div>
    <div class="row-fluid ">
        <?= $this->render('_filters') ?>
    </div>
    <div class="row-fluid ">
        <?= $this->render('_bestsellers') ?>
    </div>
</div>