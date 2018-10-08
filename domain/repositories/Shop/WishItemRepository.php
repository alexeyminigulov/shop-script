<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\WishItem;
use domain\exceptions\EntityNotFoundException;

class WishItemRepository
{
    public function find($id): WishItem
    {
        $wishItem = WishItem::findOne(['id', $id]);

        if (!$wishItem) {
            throw new EntityNotFoundException('WishItem is not found.');
        }
        return $wishItem;
    }
}