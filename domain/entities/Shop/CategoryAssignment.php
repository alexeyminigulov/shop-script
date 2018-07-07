<?php

namespace domain\entities\Shop;

use yii\db\ActiveRecord;

/**
 * @property integer $group_id;
 * @property integer $category_id;
 */
class CategoryAssignment extends ActiveRecord
{
    public static function create($categoryId): self
    {
        $assignment = new static();
        $assignment->category_id = $categoryId;
        return $assignment;
    }

    public function isForCategory($id): bool
    {
        return $this->category_id == $id;
    }

    public static function tableName(): string
    {
        return '{{%shop_attribute_group_assignments}}';
    }
}