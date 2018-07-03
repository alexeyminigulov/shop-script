<?php

use yii\helpers\Html;
use yii\grid\GridView;
use domain\helpers\CategoryHelper;
use yii\helpers\Url;

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
                    $name = CategoryHelper::getDecoratedName($model);
                    return Html::a($name, Url::to(['shop/category/view', 'id' => $model->id]));
                },
                'format' => 'raw',
            ],
            'slug',
            [
                'label' => 'Up',
                'headerOptions' => ['class' => 'text-blue'],
                'value' => function ($model) {
                    return Html::a('',
                            Url::to(['shop/category/move-up', 'id' => $model->id]),
                            ['class' => 'glyphicon glyphicon-arrow-up text-blue']
                        );
                },
                'format' => 'raw',
            ],
            [
                'label' => 'Down',
                'headerOptions' => ['class' => 'text-blue'],
                'value' => function ($model) {
                    return Html::a('',
                            Url::to(['shop/category/move-down', 'id' => $model->id]),
                            ['class' => 'glyphicon glyphicon-arrow-down text-blue']
                        );
                },
                'format' => 'raw',
            ],
            'lft',
            'rgt',
            //'depth',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
