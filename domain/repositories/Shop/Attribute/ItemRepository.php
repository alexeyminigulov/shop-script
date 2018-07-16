<?php

namespace domain\repositories\Shop\Attribute;

use domain\entities\Shop\Attribute\Item;
use domain\exceptions\EntityNotFoundException;

class ItemRepository
{
    public function find($id): Item
    {
        $item = Item::findOne(['id', $id]);

        if (!$item) {
            throw new EntityNotFoundException('Item is not found.');
        }
        return $item;
    }

    public function save(Item $item)
    {
        if (!$item->save()) {
            throw new \RuntimeException('Error during saving the Item.');
        }
    }
}