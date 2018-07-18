<?php

namespace domain\repositories\Shop\Attribute;

use domain\entities\Shop\Attribute\Item;
use domain\exceptions\EntityNotFoundException;
use domain\forms\Shop\Attribute\ItemCreateForm;

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

    public function isExist(ItemCreateForm $form): bool
    {
        $item = Item::findOne(['attribute_id' => $form->attributeId, 'option' => $form->option]);
        return isset($item);
    }

    public function save(Item $item)
    {
        if (!$item->save()) {
            throw new \RuntimeException('Error during saving the Item.');
        }
    }

    public function delete(Item $item)
    {
        if (!$item->delete()) {
            throw new \RuntimeException('Error during deleting the Item.');
        }
    }
}