<?php

namespace domain\readRepositories\Shop;

use domain\entities\Shop\Product\Product;

class ProductStorageAdapter
{
    private $dataMapper = [];

    public function getMinPrice(): int
    {
        if (isset($this->dataMapper['getMinPrice'])) {
            return $this->dataMapper['getMinPrice'];
        }
        $this->dataMapper['getMinPrice'] = Product::find()->min('price');;

        return $this->dataMapper['getMinPrice'];
    }

    public function getMaxPrice(): int
    {
        if (isset($this->dataMapper['getMaxPrice'])) {
            return $this->dataMapper['getMaxPrice'];
        }
        $this->dataMapper['getMaxPrice'] = Product::find()->max('price');;

        return $this->dataMapper['getMaxPrice'];
    }
}