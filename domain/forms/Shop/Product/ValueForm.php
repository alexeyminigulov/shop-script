<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Product\Value;
use yii\base\Model;

/**
 * This is the model class for table "shop_attributes".
 *
 * @property int $id
 * @property string $type
 * @property Value $value
 *
 * @property Attribute $attribute
 */
class ValueForm extends Model
{
    public $id;
    public $type;
    public $value;

    private $_attribute;

    public function __construct(Attribute $attribute, Value $value = null, $config = [])
    {
        parent::__construct($config);
        $this->id = $attribute->id;
        $this->type = $attribute->type;
        $this->_attribute = $attribute;

        if ($value) {
            $this->value = $value->value;
        }
    }

    public function rules()
    {
        return [
            [['value'], 'required'],
            call_user_func(function () {
                if ($this->type == Attribute::TYPE_NUMBER) {
                    return [['value'], 'number'];
                } elseif ($this->type == Attribute::TYPE_CHECKBOX || $this->type == Attribute::TYPE_RADIO_BUTTON) {
                    return [['value'], 'integer'];
                } else {
                    return [['value'], 'string', 'max' => 255];
                }
            }),
        ];
    }

    public function attributeLabels()
    {
        return [
            'value' => $this->_attribute->name,
        ];
    }

    public function getAttribute()
    {
        return $this->_attribute;
    }

    public function formName()
    {
        $name = parent::formName();
        $name .= '[' .$this->id. ']';
        return $name;
    }
}