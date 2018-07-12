<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Product\Value;
use domain\exceptions\EntityNotFoundException;

class ValueRepository
{
    public function find($productId, $attributeId): Value
    {
        $value = Value::findOne(['product_id' => $productId, 'attribute_id' => $attributeId]);

        if (!$value) {
            throw new EntityNotFoundException('Value is not found.');
        }
        return $value;
    }

    public function save(Value $value, $runValidation = true)
    {
        if (!$value->save($runValidation)) {
            throw new \RuntimeException('Value did not save.');
        }
    }
}