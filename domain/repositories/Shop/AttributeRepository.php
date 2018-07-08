<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Attribute;
use domain\exceptions\EntityNotFoundException;

class AttributeRepository
{
    public function find($id): Attribute
    {
        $group = Attribute::findOne(['id', $id]);

        if (!$group) {
            throw new EntityNotFoundException('Group is not found.');
        }
        return $group;
    }

    public function save(Attribute $attribute)
    {
        if (!$attribute->save()) {
            throw new \RuntimeException('Error during saving.');
        }
    }
}