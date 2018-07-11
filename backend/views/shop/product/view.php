<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use domain\entities\Shop\Product\Value;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Product\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'slug',
            'price',
        ],
    ]) ?>

    <div class="box box-default">
        <div class="box-header with-border text-bold">Characteristics</div>
        <div class="box-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => array_map(function (Value $value) {
                    return [
                        'label' => $value->attribute0->name,
                        'value' => $value->value,
                    ];
                }, $model->values),
            ]) ?>
        </div>
    </div>

</div>
