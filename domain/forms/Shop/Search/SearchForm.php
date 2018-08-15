<?php

namespace domain\forms\Shop\Search;

use domain\entities\Shop\Attribute\Attribute;
use elisdn\compositeForm\CompositeForm;

/**
 * Class SearchForm
 *
 * @property ValueForm[] $values
 */
class SearchForm extends CompositeForm
{
    public $slug;

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
        ];
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