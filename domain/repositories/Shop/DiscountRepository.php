<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Discount;
use domain\exceptions\EntityNotFoundException;

class DiscountRepository
{
    public function find($id): Discount
    {
        $discount = Discount::findOne(['id', $id]);

        if (!$discount) {
            throw new EntityNotFoundException('Discount is not found.');
        }
        return $discount;
    }

    public function save(Discount $discount, $runValidation = true)
    {
        if (!$discount->save($runValidation)) {
            throw new \RuntimeException('Discount did not save.');
        }
    }

    public function delete(Discount $discount)
    {
        if ($discount->delete() === false) {
            throw new \RuntimeException('Discount has not been delete.');
        }
    }
}