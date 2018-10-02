<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use domain\entities\Shop\Discussion;
use domain\helpers\ProductHelper;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Discussion */
/* @var $searchModel backend\forms\Shop\DiscussionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Discussion';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discussion-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                'label' => 'User',
                'attribute' => 'user_id',
                'value' => function (Discussion $model) {
                    return $model->user->username;
                },
            ],
            [
                'label' => 'Product',
                'attribute' => 'product_id',
                'value' => function (Discussion $model) {
                    return $model->product->name;
                },
            ],
            [
                'attribute' => 'status',
                'value' => function (Discussion $model) {
                    return ProductHelper::statusName($model->status);
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
                'urlCreator' => function($action, $model, $key, $index, $actionColumn) {
                    $params = ['userId' => (string) $model->user_id, 'productId' => (string) $model->product_id];
                    $params[0] = $actionColumn->controller ? $actionColumn->controller . '/' . $action : $action;

                    return Url::toRoute($params);
                },
            ],
        ],
    ]); ?>
</div>