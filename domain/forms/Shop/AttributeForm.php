<?php

namespace domain\forms\Shop;

use yii\base\Model;

class AttributeForm extends Model
{
    public $id;
    public $name;
    public $groupId;

    public function rules()
    {
        return [
            [['name', 'groupId'], 'required'],
            [['name'], 'string', 'max' => 255],
            ['groupId', 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'groupId' => 'Group',
        ];
    }
}