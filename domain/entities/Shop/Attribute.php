<?php

namespace domain\entities\Shop;

use Yii;

/**
 * This is the model class for table "shop_attributes".
 *
 * @property int $id
 * @property string $name
 * @property int $group_id
 *
 * @property Group $group
 */
class Attribute extends \yii\db\ActiveRecord
{
    public static function create($name, $groupId)
    {
        $attribute = new Attribute();
        $attribute->name = $name;
        $attribute->group_id = $groupId;

        return $attribute;
    }

    public function edit($name, $groupId)
    {
        $this->name = $name;
        $this->group_id = $groupId;
    }

    public function rules()
    {
        return [
            [['group_id'], 'required'],
            [['group_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
//            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'group_id' => 'Group ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    public static function tableName()
    {
        return 'shop_attributes';
    }
}
