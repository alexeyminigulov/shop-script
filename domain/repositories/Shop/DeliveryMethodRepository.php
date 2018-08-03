<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\DeliveryMethod;
use domain\exceptions\EntityNotFoundException;

class DeliveryMethodRepository
{
    public function find($id): DeliveryMethod
    {
        $deliveryMethod = DeliveryMethod::findOne(['id', $id]);

        if (!$deliveryMethod ) {
            throw new EntityNotFoundException('DeliveryMethod is not found.');
        }
        return $deliveryMethod;
    }

    public function save(DeliveryMethod $deliveryMethod, $runValidation = true)
    {
        if (!$deliveryMethod->save($runValidation)) {
            throw new \RuntimeException('DeliveryMethod did not save.');
        }
    }

    public function delete(DeliveryMethod $deliveryMethod)
    {
        if ($deliveryMethod->delete() === false) {
            throw new \RuntimeException('DeliveryMethod has not been delete.');
        }
    }
}