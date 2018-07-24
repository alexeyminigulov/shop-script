<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Brand */
/* @var $searchModel backend\forms\Shop\GroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brand';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">

    <p>
        <?= Html::a('Create Brand', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'name',
            'slug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>