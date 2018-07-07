<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use domain\helpers\CategoryHelper;
use domain\widgets\DynamicInput;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Group */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'categoryIds')->widget(DynamicInput::className(), [
        'data' => CategoryHelper::parentList(),
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
