<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Product\Product;

class ProductRepository
{
    public function save(Product $product, $runValidation = true)
    {
        if (!$product->save($runValidation)) {
            throw new \RuntimeException('Product did not save.');
        }
    }
}