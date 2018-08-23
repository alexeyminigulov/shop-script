<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\forms\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';

?>
<div class="row-fluid">
    <div class="span8 main-content-grid row-container">

        <div class="ty-mainbox-container clearfix">
            <h1 class="ty-mainbox-title">
                <?= Html::encode($this->title) ?>
            </h1>
            <div class="ty-mainbox-body">
                <div class="ty-account">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class' => 'cm-processed-form']); ?>

                    <?= $form->field($model, 'username', ['options' => ['class' => 'ty-control-group']])->textInput(['autofocus' => true, 'class' => 'ty-input-text cm-focus']) ?>

                    <?= $form->field($model, 'email', ['options' => ['class' => 'ty-control-group']])->textInput(['class' => 'ty-input-text cm-focus']) ?>

                    <?= $form->field($model, 'password', ['options' => ['class' => 'ty-control-group']])->passwordInput(['class' => 'ty-input-text cm-autocomplete-off']) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Регистрация', ['class' => 'ty-btn__login ty-btn__secondary ty-btn', 'name' => 'signup-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>