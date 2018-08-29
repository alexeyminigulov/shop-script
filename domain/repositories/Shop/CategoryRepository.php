<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Category;
use domain\entities\Shop\Group;
use domain\exceptions\EntityNotFoundException;

class CategoryRepository
{
    public function find($id): Category
    {
        $category = Category::findOne(['id', $id]);

        if (!$category) {
            throw new EntityNotFoundException('Category not found.');
        }
        return $category;
    }

    public function getPrev(Category $category): ?Category
    {
        /* @var $prevCategory Category|null */
        $prevCategory = $category->getPrev()->one();

        return $prevCategory;
    }

    public function getNext(Category $category): ?Category
    {
        /* @var $nextCategory Category|null */
        $nextCategory = $category->getNext()->one();

        return $nextCategory;
    }

    public function save(Category $category, $runValidation = true)
    {
        if (!$category->save($runValidation)) {
            throw new \RuntimeException('User did not save.');
        }
    }

    public function delete(Category $category)
    {
        if ($category->delete() === false) {
            throw new \RuntimeException('Category has not been deleted.');
        }
    }

    public function getWithParents($id, $withRoot = true)
    {
        $category = $this->find($id);

        $categories = $withRoot ? $category->getParents()->all()
            : $category->getParents()->andFilterCompare('id', 1, '<>')->all();

        $categories[] = $category;

        return $categories;
    }

    public function getGroups($id)
    {
        $categories = $this->getWithParents($id);

        $groups = [];
        foreach ($categories as $category) {
            $groups = array_merge($groups, $category->groups);
        }
        if (empty($groups)) {
            throw new EntityNotFoundException('Groups is not found.');
        }
        return $groups;
    }

    public function getAttributes($id)
    {
        /** @var Group[] $groups */
        $groups = $this->getGroups($id);
        $attributes = [];

        foreach ($groups as $group) {
            $attributes = array_merge($attributes, $group->attributes0);
        }
        if (empty($attributes)) {
            throw new EntityNotFoundException('Attributes is not found.');
        }
        return $attributes;
    }

    public function getFilters($id)
    {
        /** @var Attribute[] $attributes */
        $attributes = $this->getAttributes($id);
        $filters = [];

        foreach ($attributes as $attribute) {
            $filters[] = $attribute->filter;
        }

        return $filters;
    }

    /**
     * @param $ids
     * @return Category[]
     */
    public function getByIds($ids): array
    {
        $categories = Category::find()
            ->where(['id' => $ids])
//            ->andWhere(['<>','id', 1])
            ->orderBy('lft')
            ->all();

        if (count($categories) == 0) {
            throw new \DomainException('Categories is not found.');
        }

        return $categories;
    }

    /**
     * @param Category[] $categories
     * @param $id
     * @return array
     */
    public function getLoadedChildren(array $categories, $id)
    {
        $parent = current(array_filter($categories, function (Category $category) use ($id) {
            return $category->id == $id;
        }));

        return array_filter($categories, function (Category $category) use ($parent) {
            if ($parent->depth+1 >= $category->depth && $parent->lft < $category->lft) {
                return true;
            }
        });
    }
}