<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \domain\forms\Shop\Attribute\ItemCreateForm */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Create Attribute';
$this->params['breadcrumbs'][] = ['label' => 'Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attribute-create">

    <div class="attribute-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'option')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'attributeId')->hiddenInput()->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
