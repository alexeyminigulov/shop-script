<?php

namespace console\controllers;

use domain\repositories\Shop\ProductRepository;
use domain\services\Search\ProductIndexer;
use yii\console\Controller;

class SearchController extends Controller
{
    private $products;
    private $indexer;

    public function __construct($id, $module,
                                ProductRepository $productReadRepository,
                                ProductIndexer $indexer, $config = [])
    {
        $this->products = $productReadRepository;
        $this->indexer = $indexer;
        parent::__construct($id, $module, $config);
    }

    public function actionReindex()
    {
        $this->stdout('Clearing' . PHP_EOL);

        $this->indexer->clear();

        $this->stdout('Indexing of products' . PHP_EOL);

        $products = $this->products->getAll(false);

        foreach ($products as $product) {

            $this->indexer->index($product);
        }
    }
}