<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \domain\forms\auth\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
?>
<div class="row-fluid">
    <div class="span8 main-content-grid row-container">

        <div class="ty-mainbox-container clearfix">
            <h1 class="ty-mainbox-title">
                <?= Html::encode($this->title) ?>
            </h1>
            <div class="ty-mainbox-body">
                <div class="ty-account">
                    <p style="margin-bottom: 10px;">Please fill out your email. A link to reset password will be sent there.</p>
                    <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
