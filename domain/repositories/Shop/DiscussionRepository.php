<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Discussion;
use domain\exceptions\EntityNotFoundException;

class DiscussionRepository
{
    public function find($id): Discussion
    {
        $discussion= Discussion::findOne(['id', $id]);

        if (!$discussion) {
            throw new EntityNotFoundException('Discussion is not found.');
        }
        return $discussion;
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