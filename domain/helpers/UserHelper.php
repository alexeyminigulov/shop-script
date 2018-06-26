<?php

namespace domain\helpers;

use domain\entities\User;
use yii\helpers\Html;

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
            User::STATUS_DELETED => 'deleted',
        ];
    }

    private static function getStatus($code)
    {
        switch ($code) {
            case User::STATUS_DELETED:
                $label = 'deleted';
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