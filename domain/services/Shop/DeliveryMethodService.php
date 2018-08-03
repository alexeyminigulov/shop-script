<?php

namespace domain\services\Shop;

use domain\entities\Shop\DeliveryMethod;
use domain\forms\Shop\DeliveryMethodForm;
use domain\repositories\Shop\DeliveryMethodRepository;

class DeliveryMethodService
{
    private $repository;

    public function __construct(DeliveryMethodRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(DeliveryMethodForm $form): DeliveryMethod
    {
        $deliveryMethod = DeliveryMethod::create($form->name, $form->cost, $form->sort, $form->minWeight, $form->maxWeight);

        $this->repository->save($deliveryMethod);

        return $deliveryMethod;
    }

    public function update(DeliveryMethodForm $form): DeliveryMethod
    {
        $deliveryMethod = $this->repository->find($form->id);
        $deliveryMethod->edit($form->name, $form->cost, $form->sort, $form->minWeight, $form->maxWeight);

        $this->repository->save($deliveryMethod);

        return $deliveryMethod;
    }

    public function delete($id): void
    {
        $deliveryMethod = $this->repository->find($id);

        $this->repository->delete($deliveryMethod);
    }
}