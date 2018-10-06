<?php

namespace domain\forms\Shop\Search;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Product\Product;
use domain\readRepositories\Shop\ProductStorageAdapter;
use elisdn\compositeForm\CompositeForm;

/**
 * Class SearchForm
 *
 * @property ValueForm[] $values
 * @property ProductStorageAdapter $adapter
 */
class SearchForm extends CompositeForm
{
    public $slug;
    public $priceFrom;
    public $priceTo;

    private $adapter;

    public function __construct(array $attributes, $config = [])
    {
        $keys = array_map(function (Attribute $attribute) {
            return $attribute->id;
        }, $attributes);

        $values = array_map(function (Attribute $attribute) {
            return new ValueForm($attribute);
        }, $attributes);

        $this->values = array_combine($keys, $values);

        $this->adapter = \Yii::$container->get(ProductStorageAdapter::class);

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

    public function getAdapter()
    {
        return $this->adapter;
    }

    public function getMinPrice()
    {
        return $this->adapter->getMinPrice();
    }

    public function getMaxPrice()
    {
        return $this->adapter->getMaxPrice();
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