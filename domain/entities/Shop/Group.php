<?php

namespace domain\entities\Shop;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Category\Category;
use domain\entities\Shop\Category\CategoryAssignment;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;

/**
 * This is the model class for table "shop_attribute_groups".
 *
 * @property int $id
 * @property string $name
 *
 * @property CategoryAssignment[] $categoryAssignments
 * @property Attribute[] $attributes0
 * @property Category[] $categories
 */
class Group extends ActiveRecord
{
    public static function create($name): self
    {
        $group = new self();
        $group->name = $name;

        return $group;
    }

    public function edit($name)
    {
        $this->name = $name;
    }

    public function assignmentCategory($id)
    {
        $assignments = $this->categoryAssignments;
        foreach ($assignments as $assignment) {
            if ($assignment->isForCategory($id)) {
                return;
            }
        }
        $assignments[] = CategoryAssignment::create($id);
        $this->categoryAssignments = $assignments;
    }

    public function eraseAssignmentCategory()
    {
        $this->categoryAssignments = [];
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }
    
    public function getCategoryAssignments(): ActiveQuery
    {
        return $this->hasMany(CategoryAssignment::class, ['group_id' => 'id']);
    }

    public function getCategories(): ActiveQuery
    {
        return $this->hasMany(Category::class, ['id' => 'category_id'])->via('categoryAssignments');
    }

    public function getAttributes0()
    {
        return $this->hasMany(Attribute::class, ['group_id' => 'id']);
    }

    public function behaviors(): array
    {
        return [
            [
                'class' => SaveRelationsBehavior::className(),
                'relations' => ['categoryAssignments'],
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
        return '{{%shop_attribute_groups}}';
    }
}
