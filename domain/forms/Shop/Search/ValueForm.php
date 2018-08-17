<?php

namespace domain\forms\Shop\Search;

use yii\base\Model;
use domain\entities\Shop\Attribute\Attribute;

class ValueForm extends Model
{
    public $id;
    public $value;

    private $_attribute;

    public function __construct(Attribute $attribute, array $value = null, $config = [])
    {
        parent::__construct($config);
        $this->id = $attribute->id;
        $this->_attribute = $attribute;
    }

    public function rules()
    {
        return [
            [['value'], 'required'],
        ];
    }

    public function getAttribute0(): Attribute
    {
        return $this->_attribute;
    }

    public function attributeLabels()
    {
        return [
            'value' => $this->_attribute->name,
        ];
    }

    public function formName()
    {
        return 'v';
    }
}