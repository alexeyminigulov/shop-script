<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use domain\helpers\FilterHelper;

/* @var $this yii\web\View */
/* @var $model \domain\forms\Shop\FilterForm */

$this->title = 'Update Filter: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Filters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filter-update">

    <div class="filter-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'status')->dropDownList(FilterHelper::statusList()) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
