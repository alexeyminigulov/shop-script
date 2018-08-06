<?php

namespace domain\helpers;

use domain\entities\Shop\Order\Status;

class OrderHelper
{
    public static function statusLabel($key)
    {
        $status = [
            Status::NEW=> 'new',
            Status::PAID => 'paid',
        ];

        return $status[$key];
    }
}