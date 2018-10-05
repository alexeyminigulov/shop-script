<?php

namespace domain\services\Shop;

use domain\entities\Shop\Discount;
use domain\forms\Shop\DiscountForm;
use domain\repositories\Shop\DiscountRepository;

class DiscountService
{
    private $repository;

    public function __construct(DiscountRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(DiscountForm $form): Discount
    {
        $discount = Discount::create(
            $form->percent,
            $form->name,
            strtotime($form->fromDate),
            strtotime($form->toDate),
            $form->sort
        );

        $this->repository->save($discount);

        return $discount;
    }

    public function update(DiscountForm $form): Discount
    {
        $discount = $this->repository->find($form->id);
        $discount->edit($form->percent, $form->name, $form->fromDate, $form->toDate, $form->sort);

        $this->repository->save($discount);

        return $discount;
    }

    public function activate($id): Discount
    {
        $discount = $this->repository->find($id);
        $discount->activate();
        $this->repository->save($discount);

        return $discount;
    }

    public function draft($id)
    {
        $discount = $this->repository->find($id);
        $discount->draft();
        $this->repository->save($discount);

        return $discount;
    }

    public function delete($id)
    {
        $brand = $this->repository->find($id);
        $this->repository->delete($brand);
    }
}