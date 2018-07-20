<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Filter;
use domain\exceptions\EntityNotFoundException;

class FilterRepository
{
    public function find($id): Filter
    {
        $filter = Filter::findOne(['id', $id]);

        if (!$filter) {
            throw new EntityNotFoundException('Filter is not found.');
        }
        return $filter;
    }

    public function save(Filter $filter, $runValidation = true)
    {
        if (!$filter->save($runValidation)) {
            throw new \RuntimeException('Filter did not save.');
        }
    }

    public function delete(Filter $filter)
    {
        if ($filter->delete() === false) {
            throw new \RuntimeException('Filter has not been delete.');
        }
    }
}