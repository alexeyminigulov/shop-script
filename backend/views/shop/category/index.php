<?php

use yii\helpers\Html;
use yii\grid\GridView;
use domain\helpers\CategoryHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\Shop\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'name',
                'value' => function ($model) {
                    return CategoryHelper::getDecoratedName($model);
                },
            ],
            'slug',
            'lft',
            'rgt',
            //'depth',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
