<?php

namespace domain\forms\Shop\Attribute;

use yii\base\Model;
use domain\entities\Shop\Attribute\Item;

class ItemForm extends Model
{
    public $id;
    public $attributeId;
    public $option;

    public function __construct(Item $item, $config = [])
    {
        $this->id = $item->id;
        $this->attributeId = $item->attribute_id;
        $this->option = $item->option;
        parent::__construct($config);
    }

    public function attributeLabels()
    {
        return [
            'attributeId' => 'Attribute:',
        ];
    }

    public function rules()
    {
        return [
            [['option', 'attributeId'], 'required'],
            [['option'], 'string', 'max' => 255],
            [['attributeId'], 'integer'],
        ];
    }
}