<?php

namespace domain\services\Shop\Attribute;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Filter;
use domain\forms\Shop\Attribute\AttributeEditForm;
use domain\forms\Shop\Attribute\AttributeCreateForm;
use domain\repositories\Shop\Attribute\AttributeRepository;
use domain\repositories\Shop\ValueRepository;
use domain\services\TransactionManager;

class AttributeService
{
    private $repository;
    private $repoValue;
    private $transaction;

    public function __construct(AttributeRepository $repository,
                                ValueRepository $valueRepo,
                                TransactionManager $transaction)
    {
        $this->repository = $repository;
        $this->repoValue = $valueRepo;
        $this->transaction = $transaction;
    }

    public function create(AttributeCreateForm $form): Attribute
    {
        $attribute = Attribute::create($form->name, $form->type, $form->groupId);

        $this->transaction->wrap(function () use ($form, $attribute) {
            $this->repository->save($attribute);

            if ($attribute->type == Attribute::TYPE_INTEGER || $attribute->type == Attribute::TYPE_NUMBER) {
                $attribute->assignUnit($form->additionData);
            } else if ($attribute->type == Attribute::TYPE_RADIO_BUTTON || $attribute->type == Attribute::TYPE_CHECKBOX) {
                $attribute->assignList($form->additionData);
            }

            $filter = Filter::create($attribute->name, $attribute->id);
            $attribute->filter = $filter;

            $this->repository->save($attribute);
        });

        return $attribute;
    }

    public function update(AttributeEditForm $form): Attribute
    {
        $attribute = $this->repository->find($form->id);

        $attribute->edit($form->name, $form->type);

        if ($form->groupId != $attribute->group_id && $this->repoValue->isExist(['attribute_id' => $attribute->id])) {
            throw new \DomainException('Attribute is bind to products.');
        }
        $attribute->changeGroup($form->groupId);

        $this->repository->save($attribute);

        return $attribute;
    }

    public function delete($id)
    {
        $attribute = $this->repository->find($id);
        if ($this->repoValue->isExist(['attribute_id' => $attribute->id])) {
            throw new \DomainException('Attribute is bind to products');
        }
        $this->repository->delete($attribute);
    }
}