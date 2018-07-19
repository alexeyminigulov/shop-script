<?php

namespace domain\helpers;

use domain\entities\Shop\Product\Value;
use domain\entities\Shop\Attribute\Item;
use domain\entities\Shop\Attribute\Attribute;

class AttributeHelper
{
    public static function typeList()
    {
        return array(
            Attribute::TYPE_TEXT => 'text',
            Attribute::TYPE_BOOLEAN => 'boolean',
            Attribute::TYPE_INTEGER => 'integer',
            Attribute::TYPE_NUMBER => 'double',
            Attribute::TYPE_RADIO_BUTTON => 'radio button',
            Attribute::TYPE_CHECKBOX => 'checkbox',
        );
    }

    public static function getPrettyValue(Attribute $attribute, $productId)
    {
        $value = Value::findAll(['attribute_id' => $attribute->id, 'product_id' => $productId]);
        if (empty($value)) {
            return '';
        }
        switch ($attribute->type) {
            case Attribute::TYPE_INTEGER:
            case Attribute::TYPE_NUMBER:
                $result = $value[0]->value .' '. $attribute->unit->name;
                break;
            case Attribute::TYPE_RADIO_BUTTON:
                $result = Item::findOne(['id', $value[0]->value])->option;
                break;
            case Attribute::TYPE_CHECKBOX:
                $result = [];
                foreach ($value as $val) {
                    $result[] = Item::findOne(['id' => $val->value])->option;
                }
                $result = implode(', ', $result);
                break;
            default:
                $result = $value[0]->value;
        }
        return $result;
    }
}