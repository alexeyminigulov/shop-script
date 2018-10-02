<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Discussion;
use domain\exceptions\EntityNotFoundException;

class DiscussionRepository
{
    public function find($userId, $productId): Discussion
    {
        $discussion= $this->getOneBy(['user_id' => $userId, 'product_id' => $productId]);

        if (!$discussion) {
            throw new EntityNotFoundException('Discussion is not found.');
        }
        return $discussion;
    }

    public function exist($condition)
    {
        $condition = $this->getOneBy($condition);

        return !empty($condition);
    }

    public function getOneBy($condition)
    {
        return Discussion::findOne($condition);
    }

    public function save(Discussion $discussion, $runValidation = true)
    {
        if (!$discussion->save($runValidation)) {
            throw new \RuntimeException('Discussion did not save.');
        }
    }

    public function delete(Discussion $discussion)
    {
        if ($discussion->delete() === false) {
            throw new \RuntimeException('Discussion has not been delete.');
        }
    }
}