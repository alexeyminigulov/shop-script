<?php

/* @var $group \domain\entities\Shop\Group */
/* @var $attributesTpl string */

use yii\helpers\Html;

?>
<div class="ty-product-feature-group">
    <h3 class="ty-subheader">
        <?= Html::encode($group->name) ?>
    </h3>
    <?= $attributesTpl ?>
</div>