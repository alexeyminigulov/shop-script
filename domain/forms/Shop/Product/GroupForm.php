<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Attribute;
use domain\entities\Shop\Group;
use yii\base\Model;

class GroupForm extends Model
{
    public $name;
    public $attributes;

    public function __construct(Group $group, $config = [])
    {
        parent::__construct($config);

        $this->name = $group->name;
        $this->attributes = array_map(function (Attribute $attribute) {
            return new ValueForm($attribute);
        }, $group->attributes0);
    }
}