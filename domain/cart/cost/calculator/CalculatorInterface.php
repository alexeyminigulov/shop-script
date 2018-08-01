<?php

namespace domain\cart\cost\calculator;

use domain\cart\CartItem;
use domain\cart\cost\Cost;

interface CalculatorInterface
{
    /**
     * @param CartItem[] $items
     * @return Cost
     */
    public function  getCost(array $items): Cost;
} 