<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use domain\entities\Shop\Attribute\Attribute;

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
            echo '<div class="box-header with-border text-bold bg-light-blue-gradient">' .Html::encode($group->name). '</div>';
            echo '<div class="box-body">';
            /** @var \domain\forms\Shop\Product\ValueForm $valueForm */
            foreach ($group->attributes as $valueForm) {
                if ($valueForm->type == Attribute::TYPE_CHECKBOX) {
                    echo $form->field($valueForm, 'value')->checkboxList(ArrayHelper::map($valueForm->attribute->items, 'id', 'option'));

                } elseif ($valueForm->type == Attribute::TYPE_RADIO_BUTTON) {
                    echo $form->field($valueForm, 'value')->radioList(ArrayHelper::map($valueForm->attribute->items, 'id', 'option'));

                } else {
                    echo $form->field($valueForm, 'value', [
//                        'labelOptions' => ['style' => 'font-weight: normal'],
                    ])->textInput();
                }
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
