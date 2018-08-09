<?php

/* @var $this \yii\web\View */
/* @var $attribute \domain\entities\Shop\Attribute\Attribute */

use yii\helpers\Html;

?>

<div class="ty-product-filters__block">
    <div id="sw_content_39_1" class="ty-product-filters__switch cm-combination-filter_39_1 open cm-save-state cm-ss-reverse">
        <span class="ty-product-filters__title"><?= Html::encode($attribute->name). ', ' .Html::encode($attribute->unit->name) ?></span>
        <i class="ty-product-filters__switch-down ty-icon-down-open"></i>
        <i class="ty-product-filters__switch-right ty-icon-up-open"></i>
    </div>

    <div id="content_39_1" class="cm-product-filters-checkbox-container ty-price-slider  ">
        <p class="ty-price-slider__inputs">
            <bdi class="ty-price-slider__bidi-container">
                <span class="ty-price-slider__filter-prefix"></span>
                <input type="text" class="ty-price-slider__input-text" id="slider_39_1_left" name="left_39_1" value="19206">
                <span class="ty-rub">Р</span>
            </bdi>
            &nbsp;–&nbsp;
            <bdi class="ty-price-slider__bidi-container">
                <span class="ty-price-slider__filter-prefix"></span>
                <input type="text" class="ty-price-slider__input-text" id="slider_39_1_right" name="right_39_1" value="38880">
                <span class="ty-rub">Р</span>
            </bdi>
        </p>
        <div id="slider_39_1" class="ty-range-slider cm-range-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <span>‎<bdi><span>1680</span></bdi><span class="ty-rub">Р</span></span>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <span>‎<bdi><span>38880</span></bdi><span class="ty-rub">Р</span></span>
                    </span>
                </li>
            </ul>
            <input id="elm_checkbox_slider_39_1" data-ca-filter-id="1" class="cm-product-filters-checkbox hidden" type="checkbox" name="product_filters[1]" value="19206-38880-RUB" checked="checked">
            <input type="hidden" id="slider_39_1_json" value="{
                &quot;disabled&quot;: false,
                &quot;min&quot;: 1680,
                &quot;max&quot;: 38880,
                &quot;left&quot;: 19206,
                &quot;right&quot;: 38880,
                &quot;step&quot;: 1,
                &quot;extra&quot;: &quot;RUB&quot;
            }">
         </div>

</div>