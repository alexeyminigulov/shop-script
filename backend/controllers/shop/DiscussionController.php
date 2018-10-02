<?php

namespace backend\controllers\shop;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use domain\entities\Shop\Discussion;
use domain\services\Shop\DiscussionService;
use backend\forms\Shop\DiscussionSearch;
use yii\web\NotFoundHttpException;

class DiscussionController extends Controller
{
    private $service;

    public function __construct($id, $module, DiscussionService $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
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
     * Lists all Group models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DiscussionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Discussion model.
     * @param integer $userId
     * @param integer $productId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($userId, $productId)
    {
        return $this->render('view', [
            'model' => $this->findModel($userId, $productId),
        ]);
    }

    /**
     * Activate an existing Discussion model.
     * If activate is successful, the browser will be redirected to the 'view' page.
     * @param integer $userId
     * @param integer $productId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionActivate($userId, $productId)
    {
        try {
            $model = $this->findModel($userId, $productId);
            $discussion = $this->service->activate($model);
            return $this->redirect(['view', 'userId' => $discussion->user_id, 'productId' => $discussion->product_id]);

        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
    }

    /**
     * Draft an existing Discussion model.
     * If draft is successful, the browser will be redirected to the 'view' page.
     * @param integer $userId
     * @param integer $productId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDraft($userId, $productId)
    {
        try {
            $model = $this->findModel($userId, $productId);
            $discussion = $this->service->draft($model);
            return $this->redirect(['view', 'userId' => $discussion->user_id, 'productId' => $discussion->product_id]);

        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
    }

    /**
     * Deletes an existing Discussion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userId
     * @param integer $productId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($userId, $productId)
    {
        try {
            $model = $this->findModel($userId, $productId);
            $this->service->delete($model);
        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Discussion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userId
     * @param integer $productId
     * @return Discussion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userId, $productId): Discussion
    {
        if (($model = Discussion::findOne(['user_id' => $userId, 'product_id' => $productId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
