<?php

/* @var $category \domain\entities\Shop\Category */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<li class="ty-subcategories__item">
    <a href="<?= Url::to(['shop/catalog/view', 'slug' => $category->slug]) ?>">
        <span><?= Html::encode($category->name) ?></span>
    </a>
</li>