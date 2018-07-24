<?php

namespace domain\forms\Shop;

use yii\base\Model;
use domain\entities\Shop\Brand;

class BrandForm extends Model
{
    public $id;
    public $name;
    public $slug;

    public function __construct(Brand $brand = null, $config = [])
    {
        if ($brand) {
            $this->id = $brand->id;
            $this->name = $brand->name;
            $this->slug = $brand->slug;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name', 'slug'], 'required'],
            [['name', 'slug'], 'string', 'max' => 255],
        ];
    }
}