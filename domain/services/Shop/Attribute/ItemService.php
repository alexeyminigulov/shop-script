<?php

namespace domain\services\Shop\Attribute;

use domain\entities\Shop\Attribute\Item;
use domain\forms\Shop\Attribute\ItemCreateForm;
use domain\forms\Shop\Attribute\ItemForm;
use domain\repositories\Shop\Attribute\AttributeRepository;
use domain\repositories\Shop\Attribute\ItemRepository;
use domain\repositories\Shop\ValueRepository;

class ItemService
{
    private $repository;
    private $valueRepo;
    private $attributeRepo;

    public function __construct(ItemRepository $repository,
                                ValueRepository $valueRepo,
                                AttributeRepository $attributeRepo)
    {
        $this->repository = $repository;
        $this->valueRepo = $valueRepo;
        $this->attributeRepo = $attributeRepo;
    }

    public function create(ItemCreateForm $form): Item
    {
        if(!$this->attributeRepo->isExist(['id', $form->attributeId])) {
            throw new \DomainException('Attribute is not exist.');
        }
        if ($this->repository->isExist($form)) {
            throw new \DomainException('Item already is exist.');
        }

        $item = Item::create($form->option, $form->attributeId);
        $this->repository->save($item);

        return $item;
    }

    public function update(ItemForm $form): Item
    {
        $item = $this->repository->find($form->id);

        $item->edit($form->option);

        $this->repository->save($item);

        return $item;
    }

    public function delete($id)
    {
        $item = $this->repository->find($id);

        if ($this->valueRepo->isExist(['attribute_id' => $item->attribute_id, 'value' => $item->id])) {
            throw new \DomainException('Value is exist.');
        }

        $this->repository->delete($item);
    }
}