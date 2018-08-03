<?php

namespace backend\controllers\shop;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use backend\forms\Shop\DeliverySearch;
use domain\entities\Shop\DeliveryMethod;
use domain\forms\Shop\DeliveryMethodForm;
use domain\services\Shop\DeliveryMethodService;

/**
 * DeliveryController implements the CRUD actions for DeliveryMethod model.
 */
class DeliveryController extends Controller
{
    private $service;

    public function __construct($id, $module, DeliveryMethodService $service, $config = [])
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

    public function actionIndex()
    {
        $searchModel = new DeliverySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $form = new DeliveryMethodForm();

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $deliveryMethod = $this->service->create($form);
                return $this->redirect(['view', 'id' => $deliveryMethod->id]);

            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('create', [
            'model' => $form,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $form = new DeliveryMethodForm($model);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $deliveryMethod = $this->service->update($form);
                return $this->redirect(['update', 'id' => $deliveryMethod->id]);

            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('update', [
            'model' => $form,
        ]);
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        try {
            $this->service->delete($model->id);
        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = DeliveryMethod::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}