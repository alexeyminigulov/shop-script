<?php

use yii\helpers\Html;
use yii\grid\GridView;
use domain\helpers\GroupHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\Shop\Attribute\AttributeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attributes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attribute-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Attribute', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'name',
            [
                'label' => 'Group',
                'attribute' => 'group_id',
                'value' => function ($model) {
                    return $model->group->name;
                },
                'filter' => GroupHelper::list(),
                'headerOptions' => ['class' => 'text-blue'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
