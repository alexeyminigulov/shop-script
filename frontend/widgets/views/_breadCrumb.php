<?php

/* @var $category \domain\entities\Shop\Category */
/* @var $lastElem boolean */

use yii\helpers\Html;

?>

<?php if (!$lastElem): ?>
<span class="ty-breadcrumbs__slash">/</span>
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="http://demo.cs-cart.ru/stores/0074ef20992a3836/elektronika/mp3-pleery/" class="ty-breadcrumbs__a">
        <meta itemprop="position" content="4">
        <meta itemprop="name" content="<?= Html::encode($category->name) ?>">
        <bdi><?= Html::encode($category->name) ?></bdi>
    </a>
</span>
<?php else: ?>
<span class="ty-breadcrumbs__slash">/</span>
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
    <span itemprop="item" class="ty-breadcrumbs__current">
        <meta itemprop="position" content="5">
        <meta itemprop="name" content="<?= Html::encode($category->name) ?>">
        <bdi><?= Html::encode($category->name) ?></bdi>
    </span>
</span>
<?php endif; ?>