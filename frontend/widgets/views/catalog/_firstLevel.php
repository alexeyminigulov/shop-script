<?php

/* @var $secondLevel string */
/* @var $category \domain\entities\Shop\Category */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<li class='ty-menu__item cm-menu-item-responsive first-lvl ty-menu-item__apparel'>
    <a class='ty-menu__item-toggle visible-phone cm-responsive-menu-toggle'><i class='ty-menu__icon-open ty-icon-down-open'></i><i class='ty-menu__icon-hide ty-icon-up-open'></i></a>
    <a  href='<?= Url::to(['shop/catalog/view', 'slug' => $category->slug]) ?>' class='ty-menu__item-link a-first-lvl'>
        <div class='menu-lvl-ctn'><?= Html::encode($category->name) ?><i class='icon-right-dir'></i></div>
    </a>
    <?= $secondLevel ?>
</li>