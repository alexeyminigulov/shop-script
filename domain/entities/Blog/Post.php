<?php

namespace domain\entities\Blog;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yiidreamteam\upload\ImageUploadBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "blog_posts".
 *
 * @property int $id
 * @property int $created_at
 * @property string $title
 * @property string $description;
 * @property string $content
 * @property string $photo
 * @property int $status
 *
 * @mixin ImageUploadBehavior
 */
class Post extends ActiveRecord
{
    const STATUS_ACTIVE = 10;
    const STATUS_INACTIVE = 0;

    public static function create($title, $description, $content, UploadedFile $photo): self
    {
        $post = new self();
        $post->title = $title;
        $post->description = $description;
        $post->content = $content;
        $post->photo = $photo;
        $post->status = self::STATUS_INACTIVE;

        return $post;
    }

    public function edit($title, $description, $content, UploadedFile $photo)
    {
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
        $this->photo = $photo;
    }

    public function activate()
    {
        $this->status = self::STATUS_ACTIVE;
    }

    public function draft()
    {
        $this->status = self::STATUS_INACTIVE;
    }

    public function behaviors()
    {
        return [
            [
                'class' => '\yiidreamteam\upload\ImageUploadBehavior',
                'createThumbsOnRequest' => true,
                'attribute' => 'photo',
                'thumbs' => [
                    'thumb' => ['width' => 188, 'height' => 130],
                ],
                'filePath' => '@static/posts/[[pk]].[[extension]]',
                'fileUrl' => '@staticUrl/posts/[[pk]].[[extension]]',
                'thumbPath' => '@static/posts/[[profile]]_[[pk]].[[extension]]',
                'thumbUrl' => '@staticUrl/posts/[[profile]]_[[pk]].[[extension]]',
            ],
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%blog_posts}}';
    }
}