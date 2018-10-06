<?php

/* @var $this \yii\web\View */
/* @var $tplFilters string */
/* @var $model \domain\forms\Shop\Search\SearchForm */

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use domain\entities\Shop\Attribute\Attribute;

?>

<div class="span16 abt__ut__flying_block cat-product-filters">
    <div class="ty-mainbox-container clearfix">
        <div class="ty-mainbox-title">
            Фильтры товаров
        </div>
        <div class="ty-mainbox-body">
            <div class="cm-product-filters"
                 id="product_filters_39">
                <div class="ty-product-filters__wrapper">

                    <?php $form = ActiveForm::begin([
                        'fieldClass' => 'frontend\widgets\FilterField',
                        'action' => Url::to(['shop/catalog/view']),
                        'method' => 'get'
                    ]); ?>

                    <?= $form->field($model, 'slug')->hiddenInput()->error(false) ?>
                        <?= $this->render('_price', [
                            'form' => $model,
                        ]); ?>
                        <?php foreach ($model->values as $value): ?>
                            <?php
                                if ($value->getAttribute0()->type == Attribute::TYPE_INTEGER) {
                                    echo $this->render('_integer', [
                                        'form' => $form,
                                        'valueForm' => $value,
                                    ]);
                                } else if ($value->getAttribute0()->type == Attribute::TYPE_CHECKBOX
                                    || $value->getAttribute0()->type == Attribute::TYPE_RADIO_BUTTON) {
                                    echo $this->render('_checkbox', [
                                        'form' => $form,
                                        'valueForm' => $value,
                                    ]);
                                }
                            ?>
                        <?php endforeach; ?>
                        <div class="ty-product-filters__tools clearfix">
                            <?= Html::submitButton('Найти', ['class' => 'button btn-product-filter']) ?>
                            <a href="http://demo.cs-cart.ru/" rel="nofollow"
                               class="button btn-product-filter ty-product-filters__reset-button cm-ajax cm-ajax-full-render cm-history"
                               data-ca-event="ce.filtersinit" data-ca-scroll=".ty-mainbox-title">Сбросить</a>
                            <a href="" rel="nofollow" class="ty-btn ty-btn__secondary ty-product-filters__close-button cm-ajax hidden-desktop hidden-tablet"
                               data-ca-scroll=".ty-mainbox-title"><i class="ty-icon-cancel-circle"></i> Закрыть</a>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>