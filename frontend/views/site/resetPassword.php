<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \domain\forms\auth\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
?>
<div class="row-fluid">
    <div class="span8 main-content-grid row-container">

        <div class="ty-mainbox-container clearfix">
            <h1 class="ty-mainbox-title"><?= Html::encode($this->title) ?></h1>
            <div class="ty-mainbox-body">
                <div class="ty-account">

                    <p style="margin-bottom: 10px;">Please choose your new password.</p>

                    <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
                    <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>

    </div>
</div>
