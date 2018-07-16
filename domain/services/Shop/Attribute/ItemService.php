<?php

namespace domain\services\Shop\Attribute;

use domain\entities\Shop\Attribute\Item;
use domain\forms\Shop\Attribute\ItemForm;
use domain\repositories\Shop\Attribute\ItemRepository;

class ItemService
{
    private $repository;

    public function __construct(ItemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update(ItemForm $form): Item
    {
        $item = $this->repository->find($form->id);

        $item->edit($form->option);

        $this->repository->save($item);

        return $item;
    }
}