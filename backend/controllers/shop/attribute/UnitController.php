<?php

namespace backend\controllers\shop\attribute;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Attribute\Unit;
use domain\forms\Shop\Attribute\UnitForm;
use domain\services\Shop\Attribute\UnitService;

/**
 * AttributeController implements the CRUD actions for Attribute model.
 */
class UnitController extends Controller
{
    private $service;

    public function __construct($id, $module, UnitService $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
        ];
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $form = new UnitForm($model);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $unit = $this->service->update($form);
                return $this->redirect(['shop/attribute/attribute/update', 'id' => $unit->attribute_id]);

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
        if (($model = Unit::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}