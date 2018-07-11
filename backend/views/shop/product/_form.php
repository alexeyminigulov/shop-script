<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Product\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?php
    foreach ($model->groups as $group) {
        echo '<div class="box box-default">';
            echo '<div class="box-header with-border text-bold">' .Html::encode($group->name). '</div>';
            echo '<div class="box-body">';
            foreach ($group->attributes as $attribute) {
                echo $form->field($attribute, 'value', [
                    'labelOptions' => ['style' => 'font-weight: normal'],
                ])->textInput();
            }
            echo '</div>';
        echo '</div>';
    }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
