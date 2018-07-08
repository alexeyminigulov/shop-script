<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Attribute;

class AttributeRepository
{
    public function save(Attribute $attribute)
    {
        if (!$attribute->save()) {
            throw new \RuntimeException('Error during saving.');
        }
    }
}