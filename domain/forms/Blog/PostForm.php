<?php

namespace domain\forms\Blog;

use yii\base\Model;
use domain\entities\Blog\Post;
use yii\web\UploadedFile;

/**
 * Class PostForm
 * @package domain\forms\Shop
 *
 * @property int $id
 * @property int $created_at
 * @property string $title
 * @property string $description;
 * @property string $content
 * @property UploadedFile $photo
 * @property int $status
 */
class PostForm extends Model
{
    public $id;
    public $title;
    public $description;
    public $content;
    public $photo;

    public function __construct(Post $post = null, $config = [])
    {
        if ($post) {
            $this->id = $post->id;
            $this->title = $post->title;
            $this->description = $post->description;
            $this->content = $post->content;
            $this->photo = $post->photo;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['title', 'description', 'content', 'photo'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['description', 'content'], 'string'],
            [['photo'], 'image'],
        ];
    }

    public function beforeValidate(): bool
    {
        if (parent::beforeValidate()) {
            $this->photo = UploadedFile::getInstance($this, 'photo');
            return true;
        }
        return false;
    }
}