<?php

namespace domain\forms\Shop\Search;

use yii\base\Model;
use domain\entities\Shop\Attribute\Attribute;

/**
 * Class ValueForm
 *
 * @property Attribute $attribute0
 */
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

    public function isFilled(): bool
    {
        if (!empty($this->value) && is_array($this->value)) {
            return !empty(reset($this->value));
        }
        return false;
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