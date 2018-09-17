<?php

namespace domain\repositories\Blog;

use domain\entities\Blog\Post;
use domain\exceptions\EntityNotFoundException;

class PostRepository
{
    public function find($id): Post
    {
        $post = Post::findOne(['id', $id]);

        if (!$post) {
            throw new EntityNotFoundException('Post is not found.');
        }
        return $post;
    }

    public function save(Post $post, $runValidation = true)
    {
        if (!$post->save($runValidation)) {
            throw new \RuntimeException('Post did not save.');
        }
    }

    public function delete(Post $post)
    {
        if ($post->delete() === false) {
            throw new \RuntimeException('Post has not been delete.');
        }
    }
}