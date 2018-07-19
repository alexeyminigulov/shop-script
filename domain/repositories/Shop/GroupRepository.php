<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Group;
use domain\exceptions\EntityNotFoundException;

class GroupRepository
{
    public function find($id): Group
    {
        $group = Group::findOne(['id', $id]);

        if (!$group) {
            throw new EntityNotFoundException('Group is not found.');
        }
        return $group;
    }

    public function save(Group $group, $runValidation = true)
    {
        if (!$group->save($runValidation)) {
            throw new \RuntimeException('Group did not save.');
        }
    }

    public function delete(Group $group)
    {
        if ($group->delete() === false) {
            throw new \RuntimeException('Group has not been delete.');
        }
    }
}