<?php

/* @var $this \yii\web\View */
/* @var $attribute \domain\entities\Shop\Attribute\Attribute */

use yii\helpers\Html;

?>

<div class="ty-product-filters__block">
    <div id="sw_content_<?= $attribute->id ?>" class="ty-product-filters__switch open cm-save-state cm-ss-reverse">
        <span class="ty-product-filters__title"><?= Html::encode($attribute->name). ', ' .Html::encode($attribute->unit->name) ?></span>
        <i class="ty-product-filters__switch-down ty-icon-down-open"></i>
        <i class="ty-product-filters__switch-right ty-icon-up-open"></i>
    </div>

    <div id="content_<?= $attribute->id ?>" class="cm-product-filters-checkbox-container ty-price-slider  ">
        <p class="ty-price-slider__inputs">
            <bdi class="ty-price-slider__bidi-container">
                <span class="ty-price-slider__filter-prefix"></span>
                <input type="text" class="ty-price-slider__input-text"
                       id="slider_<?= $attribute->id ?>_min"
                       name="v[<?= $attribute->id ?>][value][min]" value="<?= $attribute->getMin() ?>">
                <span class="ty-rub">Р</span>
            </bdi>
            &nbsp;–&nbsp;
            <bdi class="ty-price-slider__bidi-container">
                <span class="ty-price-slider__filter-prefix"></span>
                <input type="text" class="ty-price-slider__input-text"
                       id="slider_<?= $attribute->id ?>_max"
                       name="v[<?= $attribute->id ?>][value][max]" value="<?= $attribute->getMax() ?>">
                <span class="ty-rub">Р</span>
            </bdi>
        </p>
        <div id="slider_<?= $attribute->id ?>"
             class="ty-range-slider cm-range-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <span>‎<bdi><span><?= $attribute->getMin() ?></span></bdi><span class="ty-rub">Р</span></span>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <span>‎<bdi><span><?= $attribute->getMax() ?></span></bdi><span class="ty-rub">Р</span></span>
                    </span>
                </li>
            </ul>
            <input type="hidden" id="slider_<?= $attribute->id ?>_json" value="{
                &quot;disabled&quot;: false,
                &quot;min&quot;: <?= $attribute->getMin() ?>,
                &quot;max&quot;: <?= $attribute->getMax() ?>,
                &quot;left&quot;: <?= $attribute->getMin() ?>,
                &quot;right&quot;: <?= $attribute->getMax() ?>,
                &quot;step&quot;: 1,
                &quot;extra&quot;: &quot;RUB&quot;
            }">
         </div>

</div>