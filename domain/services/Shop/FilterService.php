<?php

namespace domain\services\Shop;

use domain\entities\Shop\Filter;
use domain\forms\Shop\FilterForm;
use domain\repositories\Shop\FilterRepository;

class FilterService
{
    private $repository;

    public function __construct(FilterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update(FilterForm $form): Filter
    {
        $filter = $this->repository->find($form->id);

        $filter->edit($form->name, $form->status);

        $this->repository->save($filter);

        return $filter;
    }
}