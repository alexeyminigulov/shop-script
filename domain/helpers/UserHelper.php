<?php

namespace domain\helpers;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use domain\entities\User\User;

class UserHelper
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
            User::STATUS_ACTIVE => 'active',
            User::STATUS_INACTIVE => 'inactive',
        ];
    }

    public static function statusName($status): string
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    private static function getStatus($code)
    {
        switch ($code) {
            case User::STATUS_INACTIVE:
                $label = 'inactive';
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
            'delete' => 'red',
        ];

        return isset($colors[$status]) ? $colors[$status] : 'default';
    }
}