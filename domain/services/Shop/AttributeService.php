<?php

namespace domain\services\Shop;

use domain\entities\Shop\Attribute;
use domain\forms\Shop\AttributeForm;
use domain\repositories\Shop\AttributeRepository;
use domain\services\TransactionManager;

class AttributeService
{
    private $repository;
    private $transaction;

    public function __construct(AttributeRepository $repository, TransactionManager $transaction)
    {
        $this->repository = $repository;
        $this->transaction = $transaction;
    }

    public function create(AttributeForm $form): Attribute
    {
        $attribute = Attribute::create($form->name, $form->type, $form->groupId);

        $this->transaction->wrap(function () use ($form, $attribute) {
            $this->repository->save($attribute);

            if ($attribute->type == Attribute::TYPE_NUMBER) {
                $attribute->assignUnit($form->additionData);
            } else if ($attribute->type == Attribute::TYPE_SELECT || $attribute->type == Attribute::TYPE_CHECKBOX) {
                $attribute->assignList($form->additionData);
            }
            $this->repository->save($attribute);
        });

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