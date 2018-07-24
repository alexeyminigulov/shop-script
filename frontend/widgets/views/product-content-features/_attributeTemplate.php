<?php

/* @var $attribute \domain\entities\Shop\Attribute\Attribute */
/* @var $product \domain\entities\Shop\Product\Product */

use yii\helpers\Html;
use domain\helpers\AttributeHelper;

?>
<div class="ty-product-feature">
    <span class="ty-product-feature__label"><?= Html::encode($attribute->name) ?></span>
    <div class="ty-product-feature__value"><?= Html::encode(AttributeHelper::getPrettyValue($attribute, $product->id)) ?></div>
</div>