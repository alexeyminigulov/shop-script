<?php

namespace domain\services\Blog;

use domain\entities\Blog\Post;
use domain\forms\Blog\PostForm;
use domain\repositories\Blog\PostRepository;

class PostService
{
    private $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(PostForm $form): Post
    {
        $post = Post::create($form->title, $form->description, $form->content, $form->photo);

        $this->repository->save($post);

        return $post;
    }

    public function update(PostForm $form): Post
    {
        $post = $this->repository->find($form->id);
        $post->edit($form->title, $form->description, $form->content, $form->photo);

        $this->repository->save($post);

        return $post;
    }

    public function delete($id)
    {
        $post = $this->repository->find($id);
        $this->repository->delete($post);
    }
}