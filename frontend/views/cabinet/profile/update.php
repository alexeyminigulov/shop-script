<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \domain\forms\ProfileForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Учетная запись';

?>
<div class="row-fluid">
    <div class="span8 main-content-grid row-container">

        <div class="ty-mainbox-container clearfix">
            <h1 class="ty-mainbox-title">
                <?= Html::encode($this->title) ?>
            </h1>
            <div class="ty-mainbox-body">
                <div class="ty-account">
                    <?php $form = ActiveForm::begin(['id' => 'profile-form', 'class' => 'cm-processed-form']); ?>

                    <?= $form->field($model, 'username', ['options' => ['class' => 'ty-control-group']])->textInput(['autofocus' => true, 'class' => 'ty-input-text cm-focus']) ?>

                    <?= $form->field($model, 'email', ['options' => ['class' => 'ty-control-group']])->textInput(['autofocus' => true, 'class' => 'ty-input-text cm-focus']) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Сохранить', ['class' => 'ty-btn__login ty-btn__secondary ty-btn', 'name' => 'profile-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>