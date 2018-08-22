<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \domain\entities\Shop\Manager\Banner */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Banner', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-view">

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
            'name',
            'title',
            'description',
            'button_title',
            'button_url',
            [
                'attribute' => 'image',
                'value' => Html::a(
                                Html::img($model->getThumbFileUrl('image', 'thumb')),
                                $model->getUploadedFileUrl('image'),
                                ['class' => 'thumbnail', 'target' => '_blank']
                            ),
                'format' => 'raw',
            ],
            [
                'attribute' => 'background_img',
                'value' => Html::a(
                    Html::img($model->getThumbFileUrl('background_img', 'thumb')),
                    $model->getUploadedFileUrl('background_img'),
                    ['class' => 'thumbnail', 'target' => '_blank']
                ),
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>