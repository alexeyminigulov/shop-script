<?php

namespace domain\forms\Shop\Attribute;

use yii\base\Model;
use domain\entities\Shop\Attribute\Attribute;

class AttributeCreateForm extends Model
{
    public $id;
    public $name;
    public $groupId;
    public $type;
    public $additionData;

    public function __construct(Attribute $attribute = null, $config = [])
    {
        if ($attribute) {
            $this->id = $attribute->id;
            $this->name = $attribute->name;
            $this->groupId = $attribute->group_id;
            $this->type = $attribute->type;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name', 'groupId', 'type'], 'required'],
            [['name', 'type'], 'string', 'max' => 255],
            ['groupId', 'integer'],
        ];
    }

    public function validate($attributeNames = null, $clearErrors = true)
    {
        $result = parent::validate($attributeNames, $clearErrors);
        if (!$result) {
            return false;
        }

        if ($this->type == Attribute::TYPE_NUMBER
            || $this->type == Attribute::TYPE_RADIO_BUTTON
            || $this->type == Attribute::TYPE_CHECKBOX) {
            $result = empty($this->additionData) ? false : true;
        }
        return $result;
    }

    public function load($data, $formName = null)
    {
        $result = parent::load($data, $formName);
        if (!$result) {
            return false;
        }

        if ($this->type == Attribute::TYPE_NUMBER
            || $this->type == Attribute::TYPE_RADIO_BUTTON
            || $this->type == Attribute::TYPE_CHECKBOX) {

            if ($data[$this->formName()]['additionData']) {
                if ($this->type == Attribute::TYPE_NUMBER) {
                    $this->additionData = $data[$this->formName()]['additionData'];
                } else {
                    $values = explode(PHP_EOL, $data[$this->formName()]['additionData']);
                    $this->additionData = array_map(function ($value) {
                        return trim($value);
                    }, $values);
                }
                $result = true;
            } else {
                $result = false;
            }
        }
        return $result;
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'groupId' => 'Group',
        ];
    }
}