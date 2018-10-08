<?php

/* @var $this \yii\web\View */
/* @var $dataProvider \yii\data\DataProviderInterface*/

use yii\helpers\Html;
use frontend\widgets\ProductsWidget;

$this->title = 'Новинки в магазине';

?>
<div class="row-fluid ">
    <div class="span16 ">
        <div class="ty-mainbox-container clearfix about-company-desc">
            <div class="ty-mainbox-title"><?= Html::encode($this->title) ?></div>
        </div>
    </div>
</div>
<div class="row-fluid ">
    <?= ProductsWidget::widget([
        'dataProvider' => $dataProvider,
    ]) ?>
</div>