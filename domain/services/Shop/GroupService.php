<?php

namespace domain\services\Shop;

use domain\entities\Shop\Group;
use domain\forms\Shop\GroupForm;
use domain\repositories\Shop\GroupRepository;

class GroupService
{
    private $repository;

    public function __construct(GroupRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(GroupForm $form): Group
    {
        $group = Group::create($form->name);
        $this->repository->save($group);

        return $group;
    }

    public function update(GroupForm $form): Group
    {
        $group = $this->repository->find($form->id);

        $group->edit($form->name);
        $this->repository->save($group);

        return $group;
    }
}