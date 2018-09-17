<?php

namespace domain\services\Shop;

use domain\entities\Shop\Discussion;
use domain\forms\Shop\Discussion\CommentForm;
use domain\repositories\Shop\DiscussionRepository;
use domain\repositories\Shop\ProductRepository;
use domain\repositories\UserRepository;

class DiscussionService
{
    private $repository;
    private $users;
    private $products;

    public function __construct(DiscussionRepository $repository, UserRepository $users, ProductRepository $products)
    {
        $this->repository = $repository;
        $this->users = $users;
        $this->products = $products;
    }

    public function create(CommentForm $form): Discussion
    {
        $user = $this->users->get($form->userId);
        $product = $this->products->find($form->productId);

        $discussion = Discussion::create($user->id, $product->id, $form->text, $form->rating);

        $this->repository->save($discussion);

        return $discussion;
    }
}