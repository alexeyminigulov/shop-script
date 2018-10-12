<?php

namespace domain\entities\Shop\Product\events;

use domain\entities\Shop\Product\Product;

class ProductPersistence
{
    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
}