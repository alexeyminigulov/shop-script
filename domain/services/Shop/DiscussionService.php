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
        if ($this->repository->exist(['user_id' => $form->userId, 'product_id' => $form->productId])) {
            throw new \DomainException('Вы уже оставляли отзыв.');
        }
        $user = $this->users->get($form->userId);
        $product = $this->products->find($form->productId);

        $discussion = Discussion::create($user->id, $product->id, $form->text, $form->rating);
        $this->repository->save($discussion);

        return $discussion;
    }

    public function activate(Discussion $discussion): Discussion
    {
        $discussion = $this->repository->find($discussion->user_id, $discussion->product_id);

        $discussion->activate();

        $this->transaction->wrap(function() use ($discussion) {

            $this->repository->save($discussion);
            $product = $this->products->find($discussion->product_id);
            $discussions = $product->getDiscussions()
                ->andWhere(['status' => Discussion::STATUS_ACTIVE])
                ->asArray()
                ->all();
            $sumRatings = array_sum(ArrayHelper::getColumn($discussions, 'rating'));
            $rating = $sumRatings / count($discussions);
            $product->updateRating($rating);
            $this->products->save($product);
        });

        return $discussion;
    }

    public function draft(Discussion $discussion): Discussion
    {
        $discussion = $this->repository->find($discussion->user_id, $discussion->product_id);

        $discussion->draft();

        $this->transaction->wrap(function() use ($discussion) {

            $this->repository->save($discussion);
            $product = $this->products->find($discussion->product_id);
            $discussions = $product->getDiscussions()
                ->andWhere(['status' => Discussion::STATUS_ACTIVE])
                ->asArray()
                ->all();
            $sumRatings = array_sum(ArrayHelper::getColumn($discussions, 'rating'));
            $rating = $sumRatings == 0 ? 0 : $sumRatings / count($discussions);
            $product->updateRating($rating);
            $this->products->save($product);
        });

        return $discussion;
    }

    public function delete(Discussion $discussion)
    {
        $this->transaction->wrap(function() use ($discussion) {

            $this->repository->delete($discussion);
            $product = $this->products->find($discussion->product_id);
            $discussions = $product->getDiscussions()
                ->andWhere(['status' => Discussion::STATUS_ACTIVE])
                ->asArray()
                ->all();
            $sumRatings = array_sum(ArrayHelper::getColumn($discussions, 'rating'));
            $rating = $sumRatings == 0 ? 0 : $sumRatings / count($discussions);
            $product->updateRating($rating);
            $this->products->save($product);
        });
    }
}