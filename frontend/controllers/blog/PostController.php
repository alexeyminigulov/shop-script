<?php
namespace frontend\controllers\blog;

use Yii;
use yii\web\Controller;
use domain\entities\Blog\Post;

/**
 * Class PostController
 */
class PostController extends Controller
{
    /**
     * Displays posts
     */
    public function actionIndex()
    {
        $posts = Post::find()->limit(5)->all();

        return $this->render('index', [
            'posts' => $posts,
        ]);
    }
}
