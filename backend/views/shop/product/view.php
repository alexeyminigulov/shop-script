<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
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
            'name',
            'slug',
            'price',
        ],
    ]) ?>

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
