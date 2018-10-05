<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use domain\entities\Shop\Discount;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Discount */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Discount', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discount-view">

    <p>
        <?php
        if ($model->active != Discount::STATUS_ACTIVE) {
            echo Html::a('Activate',
                ['activate', 'id' => $model->id],
                ['class' => 'btn btn-primary']);
        } else {
            echo Html::a('Draft',
                ['draft', 'id' => $model->id],
                ['class' => 'btn btn-warning']);
        }
        ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'percent',
            [
                'attribute' => 'from_date',
                'format' => 'date',
            ],
            [
                'attribute' => 'to_date',
                'format' => 'date',
            ],
            'active',
            'sort',
        ],
    ]) ?>

</div>