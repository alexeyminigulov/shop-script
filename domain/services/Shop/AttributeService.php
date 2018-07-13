<?php

namespace domain\services\Shop;

use domain\entities\Shop\Attribute;
use domain\forms\Shop\AttributeForm;
use domain\repositories\Shop\AttributeRepository;

class AttributeService
{
    private $repository;

    public function __construct(AttributeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(AttributeForm $form): Attribute
    {
        $attribute = Attribute::create($form->name, $form->type, $form->groupId);

        $this->repository->save($attribute);

        return $attribute;
    }

    public function update(AttributeForm $form): Attribute
    {
        $attribute = $this->repository->find($form->id);

        $attribute->edit($form->name, $form->type, $form->groupId);

        $this->repository->save($attribute);

        return $attribute;
    }

    public function delete($id)
    {
        $attribute = $this->repository->find($id);
        $this->repository->delete($attribute);
    }
}