<?php

namespace backend\controllers\shop\attribute;

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

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $form = new ItemForm($model);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $unit = $this->service->update($form);
                return $this->redirect(['view', 'id' => $unit->id]);

            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('update', [
            'model' => $form,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Item::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}