<?php
namespace api\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return ['version' => '1.0.0'];
    }
}
