<?php

namespace domain\repositories\Shop\Attribute;

use domain\entities\Shop\Attribute\Attribute;
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

    public function delete(Attribute $attribute)
    {
        if (!$attribute->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }
}