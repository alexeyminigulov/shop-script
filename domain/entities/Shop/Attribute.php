<?php

namespace domain\entities\Shop;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "shop_attributes".
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int $group_id
 *
 * @property Group $group
 */
class Attribute extends ActiveRecord
{
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_TEXT = 'text';
    const TYPE_NUMBER = 'number';
    const TYPE_SELECT = 'select';
    const TYPE_CHECKBOX = 'checkbox';

    public static function create($name, $type, $groupId)
    {
        $attribute = new Attribute();
        $attribute->name = $name;
        $attribute->type = $type;
        $attribute->group_id = $groupId;

        return $attribute;
    }

    public function edit($name, $type, $groupId)
    {
        $this->name = $name;
        $this->type = $type;
        $this->group_id = $groupId;
    }

    public function rules()
    {
        return [
            [['name', 'type', 'group_id'], 'required'],
            [['group_id'], 'integer'],
            [['name', 'type'], 'string', 'max' => 255],
//            [['name'], 'unique'],
//            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    public static function tableName()
    {
        return '{{%shop_attributes}}';
    }
}
