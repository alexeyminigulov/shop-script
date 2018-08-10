<?php

namespace backend\controllers\shop;

use domain\forms\Shop\Product\ProductCreateForm;
use domain\forms\Shop\Product\ProductEditForm;
use domain\forms\Shop\ProductSelectForm;
use domain\repositories\Shop\ProductRepository;
use domain\services\Shop\ProductService;
use Yii;
use domain\entities\Shop\Product\Product;
use backend\forms\Shop\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    private $service;
    private $repository;

    public function __construct($id, $module, ProductService $service, ProductRepository $repository, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->service = $service;
        $this->repository = $repository;
    }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $form = new ProductSelectForm();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $form,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'repository' => $this->repository,
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param integer $id Category id
     * @return mixed
     */
    public function actionCreate($id)
    {
        $groups = $this->repository->getGroups($id);
        $form = new ProductCreateForm($id, $groups);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $model = $this->service->create($form);
                return $this->redirect(['view', 'id' => $model->id]);

            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('create', [
            'model' => $form,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $product = $this->findModel($id);
        $groups = $this->repository->getGroups($product->category_id);
        $form = new ProductEditForm($product, $groups);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $product = $this->service->update($form);
                return $this->redirect(['view', 'id' => $product->id]);

            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('update', [
            'model' => $form,
        ]);
    }

    public function actionMovePictureUp($id, $photo_id)
    {
        try {
            $product = $this->service->movePictureUp($id, $photo_id);
            return $this->redirect(['view', 'id' => $product->id]);

        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
    }

    public function actionMovePictureDown($id, $photo_id)
    {
        try {
            $product = $this->service->movePictureDown($id, $photo_id);
            return $this->redirect(['view', 'id' => $product->id]);

        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
    }

    public function actionDeletePhoto($id, $photo_id)
    {
        $this->service->deletePicture($id, $photo_id);
        return $this->redirect(['view', 'id' => $id]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
