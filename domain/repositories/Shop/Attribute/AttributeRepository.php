<?php

namespace domain\repositories\Shop\Attribute;

use domain\entities\Shop\Attribute\Attribute;
use domain\exceptions\EntityNotFoundException;

class AttributeRepository
{
    public function find($id): Attribute
    {
        $attribute = Attribute::findOne(['id', $id]);

        if (!$attribute) {
            throw new EntityNotFoundException('Attribute is not found.');
        }
        return $attribute;
    }

    public function isExist($id): bool
    {
        $attribute = Attribute::findOne(['id', $id]);
        return isset($attribute);
    }

    public function save(Attribute $attribute)
    {
        if (!$attribute->save()) {
            throw new \RuntimeException('Error during saving.');
        }
    }

    public function delete(Attribute $attribute)
    {
        if (!$attribute->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }
}