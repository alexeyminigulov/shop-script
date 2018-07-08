<?php

namespace domain\services\Shop;

use domain\entities\Shop\Group;
use domain\forms\Shop\GroupForm;
use domain\repositories\Shop\GroupRepository;
use domain\services\TransactionManager;

class GroupService
{
    private $repository;
    private $categoryService;
    private $transaction;

    public function __construct(GroupRepository $repository,
                                CategoryService $categoryService,
                                TransactionManager $transaction
                                )
    {
        $this->repository = $repository;
        $this->categoryService = $categoryService;
        $this->transaction = $transaction;
    }

    public function create(GroupForm $form): Group
    {
        $group = Group::create($form->name);

        $categoryIds = $this->categoryService->clearCategoryIds($form->categoryIds);

        foreach ($categoryIds as $id) {
            $group->assignmentCategory($id);
        }
        $this->repository->save($group);

        return $group;
    }

    public function update(GroupForm $form): Group
    {
        $group = $this->repository->find($form->id);
        $group->edit($form->name);
        $categoryIds = $this->categoryService->clearCategoryIds($form->categoryIds);

        $this->transaction->wrap(function () use ($group, $categoryIds) {

            $group->eraseAssignmentCategory();
            $this->repository->save($group);
            foreach ($categoryIds as $id) {
                $group->assignmentCategory($id);
            }
            $this->repository->save($group);
        });

        return $group;
    }
}