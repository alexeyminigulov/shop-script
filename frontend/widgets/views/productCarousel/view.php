<?php

/* @var $products \domain\entities\Shop\Product\Product[] */

use frontend\widgets\ProductCard;

?>
<div id="scroll_list_101" class="jcarousel-skin owl-carousel ty-scroller-list grid-list no-buttons ty-scroller-advanced">

    <?php foreach ($products as $product): ?>

        <div class="ty-scroller-list__item">
        <?= ProductCard::widget([
                'product' => $product,
            ]) ?>
        </div>

    <?php endforeach; ?>

</div>