<?php

namespace domain\entities\Shop;

use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;
use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "shop_attribute_groups".
 *
 * @property int $id
 * @property string $name
 *
 * @property CategoryAssignment[] $categoryAssignments
 */
class Group extends \yii\db\ActiveRecord
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

    public static function tableName()
    {
        return 'shop_attribute_groups';
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
}
