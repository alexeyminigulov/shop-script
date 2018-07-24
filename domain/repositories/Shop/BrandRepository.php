<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Brand;
use domain\exceptions\EntityNotFoundException;

class BrandRepository
{
    public function find($id): Brand
    {
        $brand = Brand::findOne(['id', $id]);

        if (!$brand) {
            throw new EntityNotFoundException('Brand is not found.');
        }
        return $brand;
    }

    public function save(Brand $brand, $runValidation = true)
    {
        if (!$brand->save($runValidation)) {
            throw new \RuntimeException('Brand did not save.');
        }
    }

    public function delete(Brand $brand)
    {
        if ($brand->delete() === false) {
            throw new \RuntimeException('Brand has not been delete.');
        }
    }
}