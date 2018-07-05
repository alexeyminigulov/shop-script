<?php

namespace domain\forms\Shop;

use domain\entities\Shop\Group;
use yii\base\Model;

class GroupForm extends Model
{
    public $id;
    public $name;

    public function __construct(Group $group = null, $config = [])
    {
        if ($group) {
            $this->id = $group->id;
            $this->name = $group->name;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }
}