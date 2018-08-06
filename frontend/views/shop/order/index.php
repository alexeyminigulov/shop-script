<?php

/* @var $this \yii\web\View */
/* @var $model \domain\forms\Shop\Order\OrderForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="tygh-content clearfix">
    <div class="container-fluid  content-grid">
        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 breadcrumbs-grid">
                    <div id="breadcrumbs_10">
                        <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="ty-breadcrumbs clearfix">
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="http://demo.cs-cart.ru/stores/ca33079d2c5d3392/" class="ty-breadcrumbs__a">
                                   <bdi>Главная</bdi>
                                </a>
                            </span>
                            <span class="ty-breadcrumbs__slash">/</span>
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <span itemprop="item" class="ty-breadcrumbs__current">
                                   <bdi>Содержимое корзины</bdi>
                                </span>
                             </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid-row">
            <div class="row-fluid">
                <div class="span16 main-content-grid">
                    <div class="ty-mainbox-container clearfix">
                        <div class="ty-mainbox-body">

                            <div class="order-form">

                                <?php $form = ActiveForm::begin() ?>

                                <div class="panel panel-default">
                                    <div class="panel-heading">Customer</div>
                                    <div class="panel-body">
                                        <?= $form->field($model->customer, 'phone')->textInput() ?>
                                        <?= $form->field($model->customer, 'name')->textInput() ?>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">Delivery</div>
                                    <div class="panel-body">
                                        <?= $form->field($model->delivery, 'method')->dropDownList($model->delivery->deliveryMethodsList(), ['prompt' => '--- Select ---']) ?>
                                        <?= $form->field($model->delivery, 'index')->textInput() ?>
                                        <?= $form->field($model->delivery, 'address')->textarea(['rows' => 3]) ?>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">Note</div>
                                    <div class="panel-body">
                                        <?= $form->field($model, 'note')->textarea(['rows' => 3]) ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <?= Html::submitButton('Checkout', ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                                </div>

                                <?php ActiveForm::end() ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>