<?php
namespace frontend\controllers\shop;

use domain\repositories\Shop\DiscussionRepository;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use domain\entities\User\User;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Product\Product;
use domain\services\Shop\DiscussionService;
use domain\forms\Shop\Discussion\CommentForm;
use domain\repositories\Shop\CategoryRepository;
use domain\repositories\Shop\ProductRepository;
use domain\readRepositories\Shop\ProductReadRepository;

/**
 * Product controller
 */
class ProductController extends Controller
{
    private $repository;
    private $repoProduct;
    private $readRepository;
    private $discussionService;
    private $discussions;

    public function __construct($id, $module,
                                CategoryRepository $repository,
                                ProductRepository $repoProduct,
                                ProductReadRepository $readRepository,
                                DiscussionService $discussionService,
                                DiscussionRepository $discussions,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->repository = $repository;
        $this->repoProduct = $repoProduct;
        $this->readRepository = $readRepository;
        $this->discussionService = $discussionService;
        $this->discussions = $discussions;
    }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'comment' => ['POST'],
                ],
            ],
        ];
    }

    public function actionView($slug)
    {
        $product = $this->findModel($slug);
        $categories = $this->repository->getWithParents($product->category_id, false);
        /** @var User $user */
        $user = Yii::$app->user->identity;
        $comment = new CommentForm($user, $product);
        $discussions = $product->getDiscussions()
//            ->andWhere(['status' => Discussion::STATUS_ACTIVE])
            ->all();

        return $this->render('view', [
            'product' => $product,
            'categories' => $categories,
            'comment' => $comment,
            'discussions' => $discussions,
        ]);
    }

    public function actionSearch($q)
    {
        $dataProvider = $this->readRepository->searchByText($q);

        return $this->render('search', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionComment($slug)
    {
        /** @var User $user */
        $user = Yii::$app->user->identity;
        $form = new CommentForm($user);
        $product = Product::findOne(['slug', $slug]);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $product = Product::findOne(['id', $form->productId]);
                $this->discussionService->create($form);
                return $this->redirect(['view', 'slug' => $product->slug]);

            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }
        return $this->redirect(['view', 'slug' => $product->slug]);
    }

    protected function findModel($slug): Product
    {
        if (($model = Product::find()->andWhere(['slug' => $slug])->joinWith(['discussions'])->one()) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
