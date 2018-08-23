<?php

/* @var $this \yii\web\View */
/* @var $model \domain\forms\Shop\Order\OrderForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Содержимое корзины';

?>
<div class="row-fluid">
    <div class="span16 main-content-grid">
        <div class="ty-mainbox-container clearfix">
            <h1 class="ty-mainbox-title" style="margin-bottom: 10px;">
                <?= Html::encode($this->title) ?>
            </h1>
            <div class="ty-mainbox-body">

                <div class="order-form">

                    <?php $form = ActiveForm::begin() ?>

                    <div class="panel panel-success">
                        <div class="panel-heading">Customer</div>
                        <div class="panel-body">
                            <?= $form->field($model->customer, 'phone')->textInput() ?>
                            <?= $form->field($model->customer, 'name')->textInput() ?>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">Delivery</div>
                        <div class="panel-body">
                            <?= $form->field($model->delivery, 'method')->dropDownList($model->delivery->deliveryMethodsList(), ['prompt' => '--- Select ---']) ?>
                            <?= $form->field($model->delivery, 'index')->textInput() ?>
                            <?= $form->field($model->delivery, 'address')->textarea(['rows' => 3]) ?>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">Note</div>
                        <div class="panel-body">
                            <?= $form->field($model, 'note')->textarea(['rows' => 3]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Продолжить', ['class' => 'ty-btn__login ty-btn__secondary ty-btn']) ?>
                    </div>

                    <?php ActiveForm::end() ?>

                </div>

            </div>
        </div>
    </div>
</div>