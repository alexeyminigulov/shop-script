<?php

use yii\helpers\Html;
use yii\grid\GridView;
use domain\helpers\CategoryHelper;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Group */
/* @var $searchModel backend\forms\Shop\GroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'name',
            [
                'label' => 'Categories',
                'attribute' => 'categoryId',
                'value' => function ($model) {
                    return CategoryHelper::strNames($model->categories);
                },
                'filter' => CategoryHelper::list(false),
                'headerOptions' => ['class' => 'text-blue'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
