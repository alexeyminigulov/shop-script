<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model \domain\entities\Shop\DeliveryMethod */
/* @var $searchModel backend\forms\Shop\DeliverySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DeliveryMethod';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">

    <p>
        <?= Html::a('Create DeliveryMethod', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'name',
            'cost',
            'min_weight',
            'max_weight',
            'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>