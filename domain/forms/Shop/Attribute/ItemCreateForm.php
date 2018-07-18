<?php

namespace domain\forms\Shop\Attribute;

use yii\base\Model;

class ItemCreateForm extends Model
{
    public $attributeId;
    public $option;

    public function __construct($attributeId, $config = [])
    {
        $this->attributeId = $attributeId;
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['option', 'attributeId'], 'required'],
            [['option'], 'string', 'max' => 255],
            [['attributeId'], 'integer'],
        ];
    }
}