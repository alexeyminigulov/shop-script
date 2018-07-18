<?php

namespace backend\controllers\shop\attribute;

use domain\forms\Shop\Attribute\ItemCreateForm;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Attribute\Item;
use domain\forms\Shop\Attribute\ItemForm;
use domain\services\Shop\Attribute\ItemService;

/**
 * AttributeController implements the CRUD actions for Attribute model.
 */
class ItemController extends Controller
{
    private $service;

    public function __construct($id, $module, ItemService $service, $config = [])
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

    public function actionCreate($id)
    {
        $form = new ItemCreateForm($id);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $item = $this->service->create($form);
                return $this->redirect(['shop/attribute/attribute/update', 'id' => $id]);

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
        $form = new ItemForm($model);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $item = $this->service->update($form);
                return $this->redirect(['shop/attribute/attribute/update', 'id' => $item->attribute_id]);

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
        $item = $this->findModel($id);
        try {
            $this->service->delete($id);
        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }

        return $this->redirect(['shop/attribute/attribute/update', 'id' => $item->attribute_id]);
    }

    protected function findModel($id)
    {
        if (($model = Item::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}