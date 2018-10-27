<?php

namespace domain\entities\Shop\Product\events;

use domain\entities\Shop\Product\Product;

class ProductRemove
{
    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
}