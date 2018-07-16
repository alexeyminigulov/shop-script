<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \domain\forms\Shop\Attribute\ItemForm */

$this->title = 'Update Item';
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-update">

    <div class="item-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'option')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>