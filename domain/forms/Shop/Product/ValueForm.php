<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Attribute;
use domain\entities\Shop\Product\Value;
use yii\base\Model;

class ValueForm extends Model
{
    public $id;
    public $value;

    private $attribute;

    public function __construct(Attribute $attribute, Value $value = null, $config = [])
    {
        parent::__construct($config);
        $this->id = $attribute->id;
        $this->attribute = $attribute;

        if ($value) {
            $this->value = $value;
        }
    }

    public function rules()
    {
        return [
            [['value'], 'required'],
            [['value'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'value' => $this->attribute->name,
        ];
    }

    public function formName()
    {
        $name = parent::formName();
        $name .= '[' .$this->id. ']';
        return $name;
    }
}