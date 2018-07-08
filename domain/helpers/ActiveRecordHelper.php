<?php

namespace domain\helpers;

use yii\db\ActiveRecord;

class ActiveRecordHelper
{
    /**
     * @param ActiveRecord[]
     * @param $field
     * @return array
     */
    public static function getFields(array $models, $field = 'id')
    {
        $result = [];
        foreach ($models as $model) {
            $result[] = $model->$field;
        }
        return $result;
    }
}