<?php

/* @var $category \domain\entities\Shop\Category */

use yii\helpers\Url;
use yii\helpers\Html;

?>
<li class='ty-menu__item ty-menu__item-nodrop first-lvl ty-menu-item__newest hidden-tablet'>
    <a href='<?= Url::to(['shop/catalog/view', 'slug' => $category->slug]) ?>' class='ty-menu__item-link a-first-lvl'>
        <div class='menu-lvl-ctn'><?= Html::encode($category->name) ?></div>
    </a>
</li>