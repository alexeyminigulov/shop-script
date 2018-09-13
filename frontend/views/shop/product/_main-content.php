<?php

/* @var $this \yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

use yii\helpers\Html;
use frontend\widgets\ProductsWidget;

?>

<div class="span12 main-content-grid">
    <div class="ty-mainbox-container clearfix">
        <h1 class="ty-mainbox-title">
            РЕЗУЛЬТАТЫ ПОИСКА
        </h1>
        <div class="ty-mainbox-body">

            <?= ProductsWidget::widget([
                'dataProvider' => $dataProvider,
            ]) ?>
        </div>
    </div>
</div>