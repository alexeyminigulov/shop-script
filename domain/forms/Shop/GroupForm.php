<?php

namespace domain\forms\Shop;

use domain\entities\Shop\Group;
use yii\base\Model;

class GroupForm extends Model
{
    public $id;
    public $name;
    public $categoryIds;

    public function __construct(Group $group = null, $config = [])
    {
        if ($group) {
            $this->id = $group->id;
            $this->name = $group->name;
        }
        parent::__construct($config);
    }

    public function attributeLabels()
    {
        return [
            'categoryIds' => 'Add categories:',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'categoryIds'], 'required'],
            [['name'], 'string', 'max' => 255],
//            [['categoryIds'], 'integer'],
        ];
    }
}