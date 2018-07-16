<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use domain\entities\Shop\Attribute\Attribute;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Attribute\Attribute */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attribute-view">

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
            [
                'label' => 'Group',
                'value' => $model->group->name,
            ],
            'type',
        ],
    ]) ?>

    <?php if ($model->type == Attribute::TYPE_SELECT
    || $model->type == Attribute::TYPE_CHECKBOX
    || $model->type == Attribute::TYPE_NUMBER): ?>
    <div class="box box-default">
        <div class="box-header with-border text-bold">Additional Information:</div>
        <div class="box-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    call_user_func(function () use ($model) {
                        if ($model->type == Attribute::TYPE_NUMBER) {
                            return [
                                'label' => 'Unit',
                                'value' => $model->unit->name,
                            ];
                        } else if ($model->type == Attribute::TYPE_SELECT || $model->type == Attribute::TYPE_CHECKBOX) {
                            return [
                                'label' => 'List',
                                'value' => implode(', ', ArrayHelper::getColumn($model->items, 'option')),
                            ];
                        }
                    }),
                ],
            ]) ?>
        </div>
    </div>
    <?php endif; ?>

</div>
