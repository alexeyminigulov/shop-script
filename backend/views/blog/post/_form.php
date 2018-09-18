<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model \domain\forms\Blog\PostForm */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="post-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 5]) ?>
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
            'clientOptions' => [
                'filebrowserBrowseUrl' => yii\helpers\Url::to(['elfinder/ckeditor']),
                'filebrowserImageBrowseUrl' => yii\helpers\Url::to(['elfinder/ckeditor', 'filter' => 'image']),
            ],
            'options' => ['rows' => 7],
            'preset' => 'custom',
        ]) ?>
    <?= $form->field($model, 'photo')->fileInput()  ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>