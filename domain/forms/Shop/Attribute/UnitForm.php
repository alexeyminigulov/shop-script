<?php

namespace domain\forms\Shop\Attribute;

use yii\base\Model;
use domain\entities\Shop\Attribute\Unit;

class UnitForm extends Model
{
    public $id;
    public $attributeId;
    public $name;

    public function __construct(Unit $unit, $config = [])
    {
        $this->id = $unit->id;
        $this->attributeId = $unit->attribute_id;
        $this->name = $unit->name;
        parent::__construct($config);
    }

    public function attributeLabels()
    {
        return [
            'attributeId' => 'Attribute:',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'attributeId'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['attributeId'], 'integer'],
        ];
    }
}