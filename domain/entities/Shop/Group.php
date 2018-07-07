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
 * @property ShopAttributeGroupAssignments[] $shopAttributeGroupAssignments
 * @property ShopCategories[] $categories
 * @property ShopAttributes[] $shopAttributes
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

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getShopAttributeGroupAssignments()
//    {
//        return $this->hasMany(ShopAttributeGroupAssignments::className(), ['group_id' => 'id']);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getCategories()
//    {
//        return $this->hasMany(ShopCategories::className(), ['id' => 'category_id'])->viaTable('shop_attribute_group_assignments', ['group_id' => 'id']);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getShopAttributes()
//    {
//        return $this->hasMany(ShopAttributes::className(), ['group_id' => 'id']);
//    }

    public function getCategoryAssignments(): ActiveQuery
    {
        return $this->hasMany(CategoryAssignment::class, ['group_id' => 'id']);
    }

    public function getCategories(): ActiveQuery
    {
        return $this->hasMany(Category::class, ['id' => 'category_id'])->via('categoryAssignment');
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
