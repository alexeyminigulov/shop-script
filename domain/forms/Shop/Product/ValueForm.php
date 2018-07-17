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

    public function __construct(Attribute $attribute, array $values = null, $config = [])
    {
        parent::__construct($config);
        $this->id = $attribute->id;
        $this->type = $attribute->type;
        $this->_attribute = $attribute;

        if ($values) {
            if ($this->type == Attribute::TYPE_CHECKBOX) {
                $this->value = array_map(function (Value $value) {
                    return $value->value;
                }, $values);
            } else {
                $this->value = $values[0]->value;
            }
        }
    }

    public function rules()
    {
        return [
            [['value'], 'required'],
            call_user_func(function () {
                if ($this->type == Attribute::TYPE_NUMBER) {
                    return [['value'], 'number'];
                } elseif ($this->type == Attribute::TYPE_RADIO_BUTTON) {
                    return [['value'], 'integer'];
                } elseif ($this->type == Attribute::TYPE_CHECKBOX) {
                    return [['value'], 'each', 'rule' => ['integer']];
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