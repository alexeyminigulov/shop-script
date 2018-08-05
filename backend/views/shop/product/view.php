<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use domain\helpers\ProductHelper;
use domain\helpers\AttributeHelper;
use domain\entities\Shop\Attribute\Attribute;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Product\Product */
/* @var $repository \domain\repositories\Shop\ProductRepository */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

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
            'code',
            'name',
            'slug',
            [
                'label' => 'Brand',
                'value' => $model->brand->name,
            ],
            'description',
            [
                'attribute' => 'price',
                'value' => ProductHelper::price($model->price),
            ],
            [
                'attribute' => 'weight',
                'value' => ProductHelper::weight($model->weight),
            ],
            'quantity',
            [
                'attribute' => 'status',
                'value' => ProductHelper::statusName($model->status),
            ],
        ],
    ]) ?>

    <div class="box" id="pictures">
        <div class="box-header with-border">Pictures</div>
        <div class="box-body">

            <div class="row">
                <?php foreach ($model->pictures as $picture): ?>
                    <div class="col-md-2 col-xs-3" style="text-align: center">
                        <div class="btn-group">
                            <?= Html::a('<span class="glyphicon glyphicon-arrow-left"></span>', ['move-picture-up', 'id' => $model->id, 'photo_id' => $picture->id], [
                                'class' => 'btn btn-default',
                                'data-method' => 'post',
                            ]); ?>
                            <?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['delete-photo', 'id' => $model->id, 'photo_id' => $picture->id], [
                                'class' => 'btn btn-default',
                                'data-method' => 'post',
                                'data-confirm' => 'Remove photo?',
                            ]); ?>
                            <?= Html::a('<span class="glyphicon glyphicon-arrow-right"></span>', ['move-picture-down', 'id' => $model->id, 'photo_id' => $picture->id], [
                                'class' => 'btn btn-default',
                                'data-method' => 'post',
                            ]); ?>
                        </div>
                        <div>
                            <?= Html::a(
                                Html::img($picture->getThumbFileUrl('picture', 'thumb')),
                                $picture->getUploadedFileUrl('picture'),
                                ['class' => 'thumbnail', 'target' => '_blank']
                            ) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <?php
    /** @var \domain\entities\Shop\Group $group */
    foreach ($repository->getGroups($model->category_id) as $group): ?>
    <div class="box box-default">
        <div class="box-header with-border text-bold bg-light-blue-gradient"><?= Html::encode($group->name) ?></div>
        <div class="box-body">
            <?= DetailView::widget([
                'model' => $group,
                'attributes' => array_map(function (Attribute $attribute) use ($model) {
                    return [
                        'label' => $attribute->name,
                        'value' => AttributeHelper::getPrettyValue($attribute, $model->id),
                    ];
                }, $group->attributes0),
            ]) ?>
        </div>
    </div>
    <?php endforeach; ?>

</div>
