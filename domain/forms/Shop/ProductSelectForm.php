<?php

namespace domain\forms\Shop;

use yii\base\Model;

class ProductSelectForm extends Model
{
    public $categoryId;

    public function rules()
    {
        return [
            ['categoryId', 'required'],
            ['categoryId', 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'categoryId' => 'Select category',
        ];
    }
}