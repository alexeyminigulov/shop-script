<?php

namespace domain\repositories\Shop\Attribute;

use domain\entities\Shop\Attribute\Unit;
use domain\exceptions\EntityNotFoundException;

class UnitRepository
{
    public function find($id): Unit
    {
        $unit = Unit::findOne(['id', $id]);

        if (!$unit) {
            throw new EntityNotFoundException('Unit is not found.');
        }
        return $unit;
    }

    public function save(Unit $unit)
    {
        if (!$unit->save()) {
            throw new \RuntimeException('Error during saving the Unit.');
        }
    }
}