<?php

namespace domain\entities\Shop;

use paulzi\nestedsets\NestedSetsBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%shop_categories}}".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $lft
 * @property int $rgt
 * @property int $depth
 *
 * @mixin NestedSetsBehavior
 */
class Category extends ActiveRecord
{
    public static function create($name, $slug, ActiveRecord $parent): self
    {
        $category = new Category();
        $category->name = $name;
        $category->slug = $slug;

        $category->appendTo($parent);

        return $category;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
        ];
    }

    public function behaviors() {
        return [
            [
                'class' => NestedSetsBehavior::class,
            ],
        ];
    }

    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    public static function tableName()
    {
        return '{{%shop_categories}}';
    }
}
