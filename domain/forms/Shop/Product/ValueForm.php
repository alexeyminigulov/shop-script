<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Product\Value;
use yii\base\Model;

/**
 * This is the model class for table "shop_values".
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
                switch ($this->type) {
                    case Attribute::TYPE_INTEGER:
                    case Attribute::TYPE_RADIO_BUTTON:
                        $result = [['value'], 'integer'];
                        break;
                    case Attribute::TYPE_NUMBER:
                        $result = [['value'], 'number'];
                        break;
                    case Attribute::TYPE_CHECKBOX:
                        $result = [['value'], 'each', 'rule' => ['integer']];
                        break;
                    default:
                        $result = [['value'], 'string', 'max' => 255];
                }
                return $result;
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