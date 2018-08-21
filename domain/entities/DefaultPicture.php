<?php

namespace domain\entities;

use yii\db\ActiveRecord;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * This is the model class for table "default_pictures".
 *
 * @property string $picture
 *
 * @mixin ImageUploadBehavior
 */
class DefaultPicture extends ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class' => '\yiidreamteam\upload\ImageUploadBehavior',
                'createThumbsOnRequest' => true,
                'attribute' => 'picture',
                'thumbs' => [
                    'thumb' => ['width' => 400, 'height' => 300],
                    'thumb_40_40' => ['width' => 40, 'height' => 40],
                    'thumb_50_50' => ['width' => 50, 'height' => 50],
                    'thumb_120_120' => ['width' => 120, 'height' => 120],
                    'thumb_189_189' => ['width' => 189, 'height' => 189],
                    'thumb_400_350' => ['width' => 400, 'height' => 350],
                    'thumb_800_800' => ['width' => 800, 'height' => 800],
                ],
                'filePath' => '@static/default/[[attribute_picture]]',
                'fileUrl' => '@staticUrl/default/[[attribute_picture]]',
                'thumbPath' => '@static/default/[[profile]]_[[attribute_picture]]',
                'thumbUrl' => '@staticUrl/default/[[profile]]_[[attribute_picture]]',
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%default_pictures}}';
    }
}