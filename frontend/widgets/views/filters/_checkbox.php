<?php

/* @var $this \yii\web\View */
/* @var $attribute \domain\entities\Shop\Attribute\Attribute */

use yii\helpers\Html;

?>
<div class="ty-product-filters__block">
    <div id="sw_content_39_10" class="ty-product-filters__switch cm-combination-filter_39_10 open cm-save-state cm-ss-reverse">
        <span class="ty-product-filters__title"><?= Html::encode($attribute->name) ?></span>
        <i class="ty-product-filters__switch-down ty-icon-down-open"></i>
        <i class="ty-product-filters__switch-right ty-icon-up-open"></i>
    </div>
    <ul id="content_39_10" class="ty-product-filters">
        <li class="ty-product-filters__item-more">
            <ul id="ranges_39_10" style="max-height: 250px;" class="ty-product-filters__variants cm-filter-table<?= count($attribute->items) > 8 ? ' none-overflow' : '' ?>">
                <?php foreach ($attribute->items as $item): ?>
                <li class="cm-product-filters-checkbox-container ty-product-filters__group">
                    <input class="cm-product-filters-checkbox" type="checkbox"
                           id="checkbox_<?= $attribute->id .'_'. $item->id ?>"
                           name="product_filters[<?= Html::encode($attribute->id) ?>]"
                           value="<?= Html::encode($item->id) ?>">
                    <label for="checkbox_<?= $attribute->id .'_'. $item->id ?>"><?= Html::encode($item->option) ?></label>
                </li>
                <?php endforeach; ?>
            </ul>
            <p class="ty-product-filters__no-items-found hidden">По этим критериям поиска ничего не найдено</p>
        </li>
    </ul>
</div>