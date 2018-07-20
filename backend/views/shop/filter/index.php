<?php

use yii\helpers\Html;
use yii\grid\GridView;
use domain\helpers\FilterHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\Shop\FilterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Filter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filter-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'name',
            [
                'label' => 'Attribute',
                'attribute' => 'attribute_id',
                'value' => function ($model) {
                    return $model->attribute0->name;
                },
                'headerOptions' => ['class' => 'text-blue'],
            ],
            [
                'attribute' => 'status',
                'filter' => FilterHelper::statusList(),
                'value' => function ($model) {
                    return FilterHelper::statusLabel($model->status);
                },
                'format' => 'raw',
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}',
            ],
        ],
    ]); ?>
</div>
