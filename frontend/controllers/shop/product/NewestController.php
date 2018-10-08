<?php

namespace frontend\controllers\shop\product;

use yii\web\Controller;
use domain\readRepositories\Shop\ProductReadRepository;

class NewestController extends Controller
{
    private $repository;

    public function __construct($id, $module, ProductReadRepository $repository, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->repository = $repository;
    }

    public function actionIndex()
    {
        $this->layout = 'layout_site';

        $dataProvider = $this->repository->getNewest();

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}