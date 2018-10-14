<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use domain\helpers\ProductHelper;
use domain\entities\Shop\Discussion;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Discussion */

$this->title = 'Discussion of ' . $model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'Discussion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discussion-view">

    <p>
        <?php
        if ($model->status != Discussion::STATUS_ACTIVE) {
            echo Html::a('Activate',
                ['activate', 'userId' => $model->user_id, 'productId' => $model->product_id],
                ['class' => 'btn btn-primary']);
        } else {
            echo Html::a('Draft',
                ['draft', 'userId' => $model->user_id, 'productId' => $model->product_id],
                ['class' => 'btn btn-warning']);
        }
        ?>
        <?= Html::a('Delete',
            ['delete', 'userId' => $model->user_id, 'productId' => $model->product_id], [
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
            [
                'label' => 'User',
                'attribute' => 'user_id',
                'value' => $model->user->username,
            ],
            [
                'label' => 'Product',
                'attribute' => 'product_id',
                'value' => $model->product->name,
            ],
            [
                'attribute' => 'status',
                'value' => ProductHelper::statusName($model->status),
            ],
            'text',
            'rating',
        ],
    ]) ?>

</div>