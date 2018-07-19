<?php

namespace domain\entities\Shop\Attribute;

use yii\db\ActiveRecord;
use domain\entities\Shop\Group;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;

/**
 * This is the model class for table "shop_attributes".
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int $group_id
 *
 * @property Group $group
 * @property Unit $unit
 * @property Item[] $items
 */
class Attribute extends ActiveRecord
{
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_TEXT = 'text';
    const TYPE_INTEGER = 'integer';
    const TYPE_NUMBER = 'double';
    const TYPE_RADIO_BUTTON = 'radiobutton';
    const TYPE_CHECKBOX = 'checkbox';

    public static function create($name, $type, $groupId)
    {
        $attribute = new Attribute();
        $attribute->name = $name;
        $attribute->type = $type;
        $attribute->group_id = $groupId;

        return $attribute;
    }

    public function edit($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function changeGroup($id)
    {
        $this->group_id = $id;
    }

    public function assignUnit($name)
    {
        $unit = Unit::create($name, $this->id);
        $this->unit = $unit;
    }

    public function assignList(array $list)
    {
        $items = [];
        foreach ($list as $item) {
            $items[] = Item::create($item, $this->id);
        }
        $this->items = $items;
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

    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['attribute_id' => 'id']);
    }

    public function getItems()
    {
        return $this->hasMany(Item::class, ['attribute_id' => 'id']);
    }

    public function behaviors(): array
    {
        return [
            [
                'class' => SaveRelationsBehavior::className(),
                'relations' => ['unit', 'items'],
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%shop_attributes}}';
    }
}
