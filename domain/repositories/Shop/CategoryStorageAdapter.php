<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Category\Category;
use domain\entities\Shop\Group;
use domain\exceptions\EntityNotFoundException;

class CategoryStorageAdapter
{
    private $dataMapper = [];

    /**
     * @param int $id
     * @return Category
     */
    public function findById($id): Category
    {
        if (isset($this->dataMapper['findById'][$id])) {
            return $this->dataMapper['findById'][$id];
        }

        $category = Category::findOne(['id', $id]);
        if (!$category) {
            throw new EntityNotFoundException('Category not found.');
        }
        $this->dataMapper['findById'][$id] = $category;

        return $this->dataMapper['findById'][$id];
    }

    /**
     * @param Category $category
     * @return Category[]
     */
    public function getAllParents(Category $category): array
    {
        if (isset($this->dataMapper['getAllParents'])) {
            return $this->dataMapper['getAllParents'];
        }
        $this->dataMapper['getAllParents'] = $category->getParents()->all();

        return $this->dataMapper['getAllParents'];
    }

    /**
     * @param Category $category
     * @return Category[]
     */
    public function getAllParentsWithoutRoot(Category $category): array
    {
        if (isset($this->dataMapper['getAllParentsWithoutRoot'])) {
            return $this->dataMapper['getAllParentsWithoutRoot'];
        }
        $this->dataMapper['getAllParentsWithoutRoot'] = $category->getParents()
            ->andFilterCompare('id', 1, '<>')
            ->all();

        return $this->dataMapper['getAllParentsWithoutRoot'];
    }

    /**
     * @param Category $category
     * @return Group[]
     */
    public function getGroups(Category $category): array
    {
        if (array_key_exists('getGroups', $this->dataMapper) &&
            array_key_exists($category->id, $this->dataMapper['getGroups'])) {

            return $this->dataMapper['getGroups'][$category->id];
        }
        $this->dataMapper['getGroups'][$category->id] = $category->groups;

        return $this->dataMapper['getGroups'][$category->id];
    }
}