<?php

namespace domain\services\Shop;

use domain\entities\Shop\Category\Category;
use domain\forms\Shop\CategoryForm;
use domain\repositories\Shop\CategoryRepository;
use domain\exceptions\EntityNotFoundException;
use domain\helpers\ActiveRecordHelper;

class CategoryService
{
    private $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(CategoryForm $form): Category
    {
        try {
            $parent = $this->repository->find($form->parentId);
        } catch (EntityNotFoundException $e) {
            throw new EntityNotFoundException('Parent category not exists.');
        }

        $category = Category::create($form->name, $form->slug, $parent);

        $this->repository->save($category);
        return $category;
    }

    public function update(CategoryForm $form): Category
    {
        $category = $this->repository->find($form->id);
        $parent = $this->repository->find($form->parentId);
        if ($category->id == $parent->id) {
            throw new \DomainException('Parent do not be same like category.');
        }
        $category->edit($form->name, $form->slug, $parent);

        $this->repository->save($category);
        return $category;
    }

    public function moveUp($id)
    {
        $category = $this->repository->find($id);

        $prevCategory = $this->repository->getPrev($category);
        if (!$prevCategory) {
            return;
        }
        $prevCategory->insertAfter($category);

        $prevCategory->save();
    }

    public function moveDown($id)
    {
        $category = $this->repository->find($id);

        $nextCategory = $this->repository->getNext($category);
        if (!$nextCategory) {
            return;
        }
        $nextCategory->insertBefore($category);

        $nextCategory->save();
    }

    public function delete($id)
    {
        $category = $this->repository->find($id);
        $this->repository->delete($category);
    }

    public function clearCategoryIds(array $categoryIds): array
    {
        $categoryIds = array_values(array_unique($categoryIds));

        $categories = $this->repository->getByIds($categoryIds);

        $categories = array_reverse($categories);

        $categories = $this->clearCategories($categories);

        $categoryIds = ActiveRecordHelper::getFields($categories);

        return $categoryIds;
    }

    private function clearCategories($categoriesOrigin, $level = 0)
    {
        $categories = array_slice($categoriesOrigin, $level);
        $level++;
        if (count($categories) == 1) {
            return array_reverse($categoriesOrigin);
        }
        $first = array_shift($categories);

        foreach ($categories as $i => $category) {
            if ($first->isChildOf($category)) {
                $level--;
                $categoriesOrigin = array_values($categoriesOrigin);
                unset($categoriesOrigin[$level]);
                return $this->clearCategories($categoriesOrigin, $level);
            }
        }

        return $this->clearCategories($categoriesOrigin, $level);
    }
}