<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Attribute\Item;
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

    public function isExist(array $condition): bool
    {
        $value = Value::findOne($condition);
        return isset($value);
    }

    public function getByOne(array $condition)
    {
        $value = Value::findOne($condition);
        if (!$value) {
            throw new EntityNotFoundException('Value is not found.');
        }
        return $value;
    }

    public function getByAll(array $condition)
    {
        $values = Value::findAll($condition);
        if (empty($values)) {
            throw new EntityNotFoundException('Values is not found.');
        }
        return $values;
    }

    public function save(Value $value, $runValidation = true)
    {
        if (!$value->save($runValidation)) {
            throw new \RuntimeException('Value did not save.');
        }
    }
}