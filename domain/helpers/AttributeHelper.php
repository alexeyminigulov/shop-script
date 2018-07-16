<?php

namespace domain\helpers;

use domain\entities\Shop\Attribute\Attribute;

class AttributeHelper
{
    public static function typeList()
    {
        return array(
            Attribute::TYPE_TEXT => 'text',
            Attribute::TYPE_BOOLEAN => 'boolean',
            Attribute::TYPE_NUMBER => 'number',
            Attribute::TYPE_SELECT => 'select',
            Attribute::TYPE_CHECKBOX => 'checkbox',
        );
    }
}