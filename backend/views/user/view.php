<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use domain\helpers\UserHelper;

/* @var $this yii\web\View */
/* @var $model domain\entities\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
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
            'username',
            'email:email',
            [
                'label' => 'Created at',
                'value' => UserHelper::statusLabel($model->status),
                'format' => 'raw',
            ],
            [
                'label' => 'Created at',
                'attribute' => 'created_at',
                'format' => 'datetime',
            ],
            [
                'label' => 'Updated at',
                'attribute' => 'updated_at',
                'format' => 'datetime',
            ],
        ],
    ]) ?>

</div>
