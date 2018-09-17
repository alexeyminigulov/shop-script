<?php

namespace domain\entities\Blog;

use yii\db\ActiveRecord;

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
 */
class Post extends ActiveRecord
{
    const STATUS_ACTIVE = 10;
    const STATUS_INACTIVE = 0;

    public static function create($title, $description, $content, $photo): self
    {
        $post = new self();
        $post->title = $title;
        $post->description = $description;
        $post->content = $content;
        $post->photo = $photo;
        $post->status = self::STATUS_INACTIVE;

        return $post;
    }

    public function edit($title, $description, $content, $photo)
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

    public static function tableName()
    {
        return '{{%blog_posts}}';
    }
}