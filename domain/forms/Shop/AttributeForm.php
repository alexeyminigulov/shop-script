<?php

namespace domain\forms\Shop;

use domain\entities\Shop\Attribute;
use yii\base\Model;

class AttributeForm extends Model
{
    public $id;
    public $name;
    public $groupId;
    public $type;

    public function __construct(Attribute $attribute = null, $config = [])
    {
        if ($attribute) {
            $this->id = $attribute->id;
            $this->name = $attribute->name;
            $this->groupId = $attribute->group_id;
            $this->type = $attribute->type;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name', 'groupId', 'type'], 'required'],
            [['name', 'type'], 'string', 'max' => 255],
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