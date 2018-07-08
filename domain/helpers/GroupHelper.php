<?php

namespace domain\helpers;

use domain\entities\Shop\Group;
use yii\helpers\ArrayHelper;

class GroupHelper
{
    public static function list()
    {
        $groups = ArrayHelper::map(
            Group::find()->asArray()->all(),
            'id',
            'name'
        );

        return $groups;
    }
}