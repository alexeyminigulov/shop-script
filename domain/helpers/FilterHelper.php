<?php

namespace domain\helpers;

use domain\entities\Shop\Filter;
use domain\entities\User\User;
use yii\helpers\Html;

class FilterHelper
{
    public static function statusLabel($code)
    {
        $status = self::getStatus($code);
        $statusColor = self::statusColor($status);

        return Html::tag('span', $status, ['class' => "badge bg-$statusColor"]);
    }

    public static function statusList()
    {
        return [
            Filter::STATUS_ACTIVE => 'active',
            Filter::STATUS_HIDE => 'hided',
        ];
    }

    private static function getStatus($code)
    {
        switch ($code) {
            case Filter::STATUS_HIDE:
                $label = 'hided';
                break;
            case User::STATUS_ACTIVE:
                $label = 'active';
                break;
            default:
                $label ='unassigned';
        }
        return $label;
    }

    private static function statusColor($status)
    {
        $colors = [
            'active' => 'green',
            'hided' => 'red',
        ];

        return isset($colors[$status]) ? $colors[$status] : 'default';
    }
}