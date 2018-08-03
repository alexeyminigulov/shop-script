<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\DeliveryMethod */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'DeliveryMethods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-view">

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
            'cost',
            'min_weight',
            'max_weight',
            'sort',
        ],
    ]) ?>

</div>
