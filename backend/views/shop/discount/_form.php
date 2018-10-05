<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model \domain\forms\Shop\DiscountForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discount-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fromDate')->widget(DatePicker::class, [
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'From date ...'],
        'pluginOptions' => [
            'todayHighlight' => true,
            'autoclose'=>true,
            'orientation' => 'bottom',
            'format' => 'yyyy-mm-dd'
        ],
    ]) ?>

    <?= $form->field($model, 'toDate')->widget(DatePicker::class, [
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'To date ...'],
        'pluginOptions' => [
            'todayHighlight' => true,
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ],
    ]) ?>

    <?= $form->field($model, 'sort')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
