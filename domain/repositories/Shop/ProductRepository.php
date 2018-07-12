<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Product\Product;
use domain\exceptions\EntityNotFoundException;

class ProductRepository
{
    public function find($id): Product
    {
        $product = Product::findOne(['id', $id]);

        if (!$product) {
            throw new EntityNotFoundException('Product is not found.');
        }
        return $product;
    }

    public function save(Product $product, $runValidation = true)
    {
        if (!$product->save($runValidation)) {
            throw new \RuntimeException('Product did not save.');
        }
    }
}