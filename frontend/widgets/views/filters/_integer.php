<?php

/* @var $this \yii\web\View */
/* @var $form \yii\widgets\ActiveForm */
/* @var $valueForm \domain\forms\Shop\Search\ValueForm */

use yii\helpers\Html;

?>

<div class="ty-product-filters__block">
    <div id="sw_content_<?= $valueForm->getAttribute0()->id ?>" class="ty-product-filters__switch cm-combination-filter_39_10 cm-save-state cm-ss-reverse open">
        <span class="ty-product-filters__title"><?= Html::encode($valueForm->getAttribute0()->name). ', ' .Html::encode($valueForm->getAttribute0()->unit->name) ?></span>
        <i class="ty-product-filters__switch-down ty-icon-down-open"></i>
        <i class="ty-product-filters__switch-right ty-icon-up-open"></i>
    </div>

    <div id="content_<?= $valueForm->getAttribute0()->id ?>" class="cm-product-filters-checkbox-container ty-price-slider  ">
        <p class="ty-price-slider__inputs">
            <bdi class="ty-price-slider__bidi-container">
                <span class="ty-price-slider__filter-prefix"></span>
                <input type="text" class="ty-price-slider__input-text"
                       id="slider_<?= $valueForm->getAttribute0()->id ?>_min"
                       name="v[<?= $valueForm->getAttribute0()->id ?>][value][min]" value="<?= $valueForm->value['min'] ?>">
            </bdi>
            &nbsp;–&nbsp;
            <bdi class="ty-price-slider__bidi-container">
                <span class="ty-price-slider__filter-prefix"></span>
                <input type="text" class="ty-price-slider__input-text"
                       id="slider_<?= $valueForm->getAttribute0()->id ?>_max"
                       name="v[<?= $valueForm->getAttribute0()->id ?>][value][max]" value="<?= $valueForm->value['max'] ?>">
            </bdi>
        </p>
        <div id="slider_<?= $valueForm->getAttribute0()->id ?>"
             class="ty-range-slider cm-range-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <span>‎<bdi><span><?= $valueForm->getAttribute0()->getMin() ?></span></bdi></span>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <span>‎<bdi><span><?= $valueForm->getAttribute0()->getMax() ?></span></bdi></span>
                    </span>
                </li>
            </ul>
            <input type="hidden" id="slider_<?= $valueForm->getAttribute0()->id ?>_json" value="{
                &quot;disabled&quot;: false,
                &quot;min&quot;: <?= $valueForm->getAttribute0()->getMin() ?>,
                &quot;max&quot;: <?= $valueForm->getAttribute0()->getMax() ?>,
                &quot;left&quot;: <?= $valueForm->value['min'] ?: $valueForm->getAttribute0()->getMin() ?>,
                &quot;right&quot;: <?= $valueForm->value['max'] ?: $valueForm->getAttribute0()->getMax() ?>,
                &quot;step&quot;: 1,
                &quot;extra&quot;: &quot;RUB&quot;
            }">
        </div>
    </div>

</div>