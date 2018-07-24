<?php

/* @var $blockThirdLevel string */
/* @var $category \domain\entities\Shop\Category */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<li class='ty-top-mine__submenu-col second-lvl'>
    <div class='ty-menu__submenu-item-header '>
        <a href='<?= Url::to(['shop/catalog/view', 'slug' => $category->slug]) ?>' class='ty-menu__submenu-link'>
            <?= Html::encode($category->name) ?>
        </a>
    </div>
    <a class='ty-menu__item-toggle visible-phone cm-responsive-menu-toggle'>
        <i class='ty-menu__icon-open ty-icon-down-open'></i>
        <i class='ty-menu__icon-hide ty-icon-up-open'></i>
    </a>
    <?= $blockThirdLevel ?>
</li>