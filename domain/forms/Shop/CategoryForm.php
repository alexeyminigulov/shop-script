<?php

namespace domain\forms\Shop;

use domain\entities\Shop\Category;
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
    public $id;
    public $name;
    public $slug;
    public $parentId;

    public function __construct(Category $category = null, $config = [])
    {
        if ($category) {
            $this->id = $category->id;
            $this->name = $category->name;
            $this->slug = $category->slug;
            $this->parentId = $category->parent->id;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name', 'slug', 'parentId'], 'required'],
            [['name', 'slug'], 'string', 'max' => 255],
            ['parentId', 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'parentId' => 'Parent category',
            'name' => 'Name',
        ];
    }
}