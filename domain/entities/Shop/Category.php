<?php

namespace domain\entities\Shop;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%shop_categories}}".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $lft
 * @property int $rgt
 * @property int $depth
 */
class Category extends ActiveRecord
{
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
        return '{{%shop_categories}}';
    }
}
