<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use domain\helpers\GroupHelper;
use domain\helpers\AttributeHelper;
use domain\widgets\TypeAttribute;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Attribute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attribute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->widget(TypeAttribute::className(), [
        'items' => AttributeHelper::typeList(),
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'groupId')->dropDownList(GroupHelper::list()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
