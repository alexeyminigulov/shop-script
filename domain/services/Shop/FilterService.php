<?php

namespace domain\services\Shop;

use domain\entities\Shop\Filter;

class FilterService
{
    public function update($form): Filter
    {
        return new Filter();
    }
}