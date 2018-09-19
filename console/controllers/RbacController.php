<?php
namespace console\controllers;

use Yii;
use domain\entities\User;
use yii\console\Controller;
use yii\helpers\ArrayHelper;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $userId = $this->prompt('Enter user id', ['required' => true, 'validator' =>
                            function($input, &$error) {
                                $user = $this->findModel($input);
                                if (!$user) {
                                    $error = 'User is not found.';
                                    return false;
                                }
                                return true;
                            }]);

        $role = $this->select('Role:', ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'description'));
        $role = $auth->getRole($role);

        $auth->assign($role, $userId);

        $this->stdout('Done!' . PHP_EOL);
    }

    protected function findModel($id)
    {
        if (($model = User::find()->andWhere(['id' => $id])->one()) !== null) {
            return $model;
        }

        return false;
    }
}