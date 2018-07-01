<?php

namespace domain\forms\Shop;

use yii\base\Model;

/**
 * CategoryForm is the model behind the contact form.
 *
 * @property string $name
 * @property string $slug
 * @property integer $parentId
 */
class CategoryForm extends Model
{
    public $name;
    public $slug;
    public $parentId;

    public function rules()
    {
        return [
            [['name', 'slug', 'parentId'], 'required'],
            ['parentId', 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
        ];
    }
}