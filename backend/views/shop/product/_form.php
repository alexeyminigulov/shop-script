<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\widgets\FileInput;
use domain\helpers\BrandHelper;
use domain\helpers\ProductHelper;
use domain\entities\Shop\Attribute\Attribute;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Product\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data',
        ],
    ]); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brandId')->dropDownList(BrandHelper::list())->label('Brand') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 5]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'pictures[]')->widget(FileInput::classname(), [
        'options' => ['multiple' => true, 'accept' => 'image/*'],
    ]) ?>

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

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(ProductHelper::getListStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
