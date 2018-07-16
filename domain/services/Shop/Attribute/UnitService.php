<?php

namespace domain\services\Shop\Attribute;

use domain\entities\Shop\Attribute\Unit;
use domain\forms\Shop\Attribute\UnitForm;
use domain\repositories\Shop\Attribute\UnitRepository;

class UnitService
{
    private $repository;

    public function __construct(UnitRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update(UnitForm $form): Unit
    {
        $unit = $this->repository->find($form->id);

        $unit->edit($form->name);

        $this->repository->save($unit);

        return $unit;
    }
}