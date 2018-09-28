<?php

namespace domain\readRepositories\Blog;

use domain\entities\Blog\Post;
use yii\data\ActiveDataProvider;
use yii\data\DataProviderInterface;

class PostReadRepository
{
    public function getAll(): DataProviderInterface
    {
        $query = Post::find();

        return $this->getProvider($query);
    }

    private function getProvider($query)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 4,
            ],
        ]);

        return $dataProvider;
    }
}