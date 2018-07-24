<?php

/* @var $category \domain\entities\Shop\Category */

use yii\helpers\Url;
use yii\helpers\Html;

?>
<li class='ty-menu__submenu-item'>
    <a href='<?= Url::to(['shop/catalog/view', 'slug' => $category->slug]) ?>' class='ty-menu__submenu-link'>
        <?= Html::encode($category->name) ?>
    </a>
</li>