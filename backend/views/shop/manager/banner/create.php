<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \domain\forms\Shop\Manager\BannerForm */

$this->title = 'Create Banner';
$this->params['breadcrumbs'][] = ['label' => 'Banner', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-create">

    <div class="banner-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
        <?= $form->field($model, 'btnTitle')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'btnUrl')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'backgroundImg')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>