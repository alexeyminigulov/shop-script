<?php

namespace domain\entities\Shop;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "shop_brands".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 */
class Brand extends ActiveRecord
{
    public function rules()
    {
        return [
            [['name', 'slug'], 'required'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['slug'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
        ];
    }

    public static function tableName()
    {
        return '{{%shop_brands}}';
    }
}
