<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Group;
use domain\entities\Shop\Product\Value;
use yii\base\Model;

class GroupForm extends Model
{
    public $name;
    public $attributes;

    private $productId;

    public function __construct(Group $group, $productId = null, $config = [])
    {
        parent::__construct($config);

        $this->name = $group->name;
        $this->productId = $productId;

        if (!$productId) {

            $this->attributes = array_map(function (Attribute $attribute) {
                return new ValueForm($attribute);
            }, $group->attributes0);

        } else {
            $this->attributes = array_map(function (Attribute $attribute) use ($productId) {
                $value = Value::findAll([
                    'product_id' => $productId,
                    'attribute_id' => $attribute->id]);
                return new ValueForm($attribute, $value);
            }, $group->attributes0);
        }
    }
}