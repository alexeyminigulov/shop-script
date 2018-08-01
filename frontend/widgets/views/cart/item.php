<?php

/**
 * @var $item \domain\cart\CartItem
 */

use yii\helpers\Url;
use yii\helpers\Html;

?>
<li class="ty-cart-items__list-item">

    <div class="ty-cart-items__list-item-image">
        <?= Html::img(
                $item->getProduct()->mainPicture->getThumbFileUrl('picture', 'thumb_40_40'),
                ['class' => 'ty-pict cm-image']
        ) ?>
    </div>
    <div class="ty-cart-items__list-item-desc">
        <a href="<?= Url::to(['shop/product/view', 'slug' => $item->getProduct()->slug]) ?>"><?= $item->getProduct()->name ?></a>
        <p><span><?= $item->getQuantity() ?></span><span>&nbsp;x&nbsp;</span><bdi><span class="none"><?= $item->getProduct()->price ?>&nbsp;<span class="ty-rub">Р</span></span></bdi></p>
    </div>
    <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
        <a href="<?= Url::to(['shop/cart/delete', 'id' => $item->getId()]) ?>" class="cm-ajax-draft cm-ajax-full-render-draft"><i title="Удалить" class="ty-icon-cancel-circle"></i></a>
    </div>

</li>