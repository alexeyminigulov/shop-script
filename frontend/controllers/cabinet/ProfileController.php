<?php
namespace frontend\controllers\cabinet;

use Yii;
use domain\forms\ProfileForm;
use domain\services\ProfileService;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Profile controller
 */
class ProfileController extends Controller
{
    private $service;

    public function __construct($id, $module, ProfileService $service, $config = [])
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
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionUpdate()
    {
        $this->layout = 'layout_site';

        /* @var $user \domain\entities\User\User */
        $user = Yii::$app->user->identity;
        $form = new ProfileForm($user);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $user = $this->service->update($form);
                return $this->redirect(Yii::$app->homeUrl);

            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('update', [
            'model' => $form,
        ]);
    }
}
