<?php

namespace domain\services\Shop;

use domain\entities\Shop\Discussion;
use domain\forms\Shop\Discussion\CommentForm;
use domain\repositories\Shop\DiscussionRepository;
use domain\repositories\Shop\ProductRepository;
use domain\repositories\UserRepository;
use domain\services\TransactionManager;
use yii\helpers\ArrayHelper;

class DiscussionService
{
    private $repository;
    private $users;
    private $products;
    private $transaction;

    public function __construct(DiscussionRepository $repository,
                                UserRepository $users,
                                ProductRepository $products,
                                TransactionManager $transaction)
    {
        $this->repository = $repository;
        $this->users = $users;
        $this->products = $products;
        $this->transaction = $transaction;
    }

    public function create(CommentForm $form): Discussion
    {
        $user = $this->users->get($form->userId);
        $product = $this->products->find($form->productId);

        $discussion = Discussion::create($user->id, $product->id, $form->text, $form->rating);

        $this->transaction->wrap(function() use ($discussion, $form) {

            $this->repository->save($discussion);
            $product = $this->products->find($form->productId);
            $discussions = $product->getDiscussions()
//            ->andWhere(['status' => Discussion::STATUS_ACTIVE])
                ->asArray()->all();
            $sumRatings = array_sum(ArrayHelper::getColumn($discussions, 'rating'));
            $rating = $sumRatings / count($discussions);
            $product->updateRating($rating);
            $product->save();
        });

        return $discussion;
    }
}