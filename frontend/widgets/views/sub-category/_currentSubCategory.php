<?php

/* @var $category \domain\entities\Shop\Category */

use yii\helpers\Html;

?>

<li class="ty-subcategories__current_item">
    <span><?= Html::encode($category->name) ?></span>
</li>