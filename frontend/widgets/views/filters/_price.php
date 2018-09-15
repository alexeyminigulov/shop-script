<?php

/* @var $this \yii\web\View */
/* @var $form \domain\forms\Shop\Search\SearchForm */

use yii\helpers\Html;

?>

<div class="ty-product-filters__block">
    <div id="sw_content_price" class="ty-product-filters__switch cm-combination-filter_39_10 cm-save-state cm-ss-reverse open">
        <span class="ty-product-filters__title">Цена, р.</span>
        <i class="ty-product-filters__switch-down ty-icon-down-open"></i>
        <i class="ty-product-filters__switch-right ty-icon-up-open"></i>
    </div>

    <div id="content_price" class="cm-product-filters-checkbox-container ty-price-slider  ">
        <p class="ty-price-slider__inputs">
            <bdi class="ty-price-slider__bidi-container">
                <span class="ty-price-slider__filter-prefix"></span>
                <input type="text" class="ty-price-slider__input-text"
                       id="slider_price_min"
                       name="priceFrom" value="<?= $form->priceFrom ?>"
                       style="width: 74px;">
                <span class="ty-rub">Р</span>
            </bdi>
            &nbsp;–&nbsp;
            <bdi class="ty-price-slider__bidi-container">
                <span class="ty-price-slider__filter-prefix"></span>
                <input type="text" class="ty-price-slider__input-text"
                       id="slider_price_max"
                       name="priceTo" value="<?= $form->priceTo ?>"
                       style="width: 74px;">
                <span class="ty-rub">Р</span>
            </bdi>
        </p>
        <div id="slider_price"
             class="ty-range-slider cm-range-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <span>‎<bdi><span><?= $form->getMinPrice() ?></span></bdi><span class="ty-rub">Р</span></span>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <span>‎<bdi><span><?= $form->getMaxPrice() ?></span></bdi><span class="ty-rub">Р</span></span>
                    </span>
                </li>
            </ul>
            <input type="hidden" id="slider_price_json" value="{
                &quot;disabled&quot;: false,
                &quot;min&quot;: <?= $form->getMinPrice() ?>,
                &quot;max&quot;: <?= $form->getMaxPrice() ?>,
                &quot;left&quot;: <?= $form->priceFrom ?: $form->getMinPrice() ?>,
                &quot;right&quot;: <?= $form->priceTo ?: $form->getMaxPrice() ?>,
                &quot;step&quot;: 1,
                &quot;extra&quot;: &quot;RUB&quot;
            }">
        </div>
    </div>

</div>