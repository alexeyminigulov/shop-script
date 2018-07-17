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
            Attribute::TYPE_NUMBER => 'number',
            Attribute::TYPE_RADIO_BUTTON => 'radio button',
            Attribute::TYPE_CHECKBOX => 'checkbox',
        );
    }

    public static function getPrettyValue(Value $value)
    {
        switch ($value->attribute0->type) {
            case Attribute::TYPE_NUMBER:
                $result = $value->value .' '. $value->attribute0->unit->name;
                break;
            case Attribute::TYPE_RADIO_BUTTON:
                $result = Item::findOne(['id', $value->value])->option;
                break;
            case Attribute::TYPE_CHECKBOX:
                $result = [];
                $items = Item::findAll(['id' => $value->value]);
                foreach ($items as $item) {
                    $result[] = $item->option;
                }
                $result = implode(', ', $result);
                break;
            default:
                $result = $value->value;
        }
        return $result;
    }
}