<?php

namespace domain\forms\Shop\Search;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Product\Product;
use elisdn\compositeForm\CompositeForm;

/**
 * Class SearchForm
 *
 * @property ValueForm[] $values
 */
class SearchForm extends CompositeForm
{
    public $slug;
    public $priceFrom;
    public $priceTo;

    public function __construct(array $attributes, $config = [])
    {
        $keys = array_map(function (Attribute $attribute) {
            return $attribute->id;
        }, $attributes);

        $values = array_map(function (Attribute $attribute) {
            return new ValueForm($attribute);
        }, $attributes);

        $this->values = array_combine($keys, $values);

        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['slug'], 'required'],
            [['slug'], 'string', 'max' => 255],
            [['priceFrom', 'priceTo'], 'integer'],
        ];
    }

    public function getMinPrice()
    {
        return Product::find()->min('price');
    }

    public function getMaxPrice()
    {
        return Product::find()->max('price');
    }

    protected function internalForms()
    {
        return ['values'];
    }

    public function formName()
    {
        return '';
    }
}