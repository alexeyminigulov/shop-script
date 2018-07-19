<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use domain\helpers\GroupHelper;
use domain\entities\Shop\Attribute\Attribute;

/* @var $this yii\web\View */
/* @var $model \domain\forms\Shop\Attribute\AttributeEditForm */
/* @var $dataProvider \backend\forms\Shop\Attribute\ItemSearch;
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Update Attribute: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="attribute-update">

    <div class="attribute-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'groupId')->dropDownList(GroupHelper::list()) ?>

        <?php if ($model->type == Attribute::TYPE_RADIO_BUTTON || $model->type == Attribute::TYPE_CHECKBOX): ?>
            <div class="box box-default">
                <div class="box-header with-border text-bold"><?php echo ucfirst($model->type); ?>:</div>
                <div class="box-body">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'layout' => "{items}\n{pager}",
                        'columns' => [

                            'id',
                            'option',

                            [
                                'class' => 'yii\grid\ActionColumn',
                                'controller' => 'shop\attribute\item',
                                'template' => '{update} {delete}',
                            ],
                        ],
                    ]) ?>
                </div>
                <div class="box-footer">
                    <?= Html::a('Add', ['shop/attribute/item/create', 'id' => $model->attribute->id], ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        <?php elseif ($model->type == Attribute::TYPE_INTEGER || $model->type == Attribute::TYPE_NUMBER): ?>
            <div class="box box-default">
                <div class="box-header with-border text-bold"><?php echo ucfirst($model->type); ?>:</div>
                <div class="box-body">
                    <?= DetailView::widget([
                        'model' => $model->attribute->unit,
                        'attributes' => [
                            'id',
                            'name',
                        ],
                    ]) ?>
                </div>
                <div class="box-footer">
                    <?= Html::a('Update', ['shop/attribute/unit/update', 'id' => $model->attribute->unit->id], ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
