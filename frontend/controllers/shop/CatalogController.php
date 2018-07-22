<?php
namespace frontend\controllers\shop;

use yii\web\Controller;

/**
 * Catalog controller
 */
class CatalogController extends Controller
{
    public function actionView($slug)
    {
        return $this->render('view', [
            'slug' => $slug,
        ]);
    }
}
