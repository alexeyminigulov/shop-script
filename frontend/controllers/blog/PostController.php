<?php
namespace frontend\controllers\blog;

use Yii;
use yii\web\Controller;
use domain\entities\Blog\Post;
use domain\readRepositories\Blog\PostReadRepository;

/**
 * Class PostController
 */
class PostController extends Controller
{
    private $posts;

    public function __construct($id, $module, PostReadRepository $posts, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->posts = $posts;
    }

    /**
     * Displays posts
     */
    public function actionIndex()
    {
        $dataProvider = $this->posts->getAll();

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $post = Post::findOne(['id' => $id]);

        return $this->render('view', [
            'post' => $post,
        ]);
    }
}
