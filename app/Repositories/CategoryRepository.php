<?php
namespace App\Repositories;

use App\Constants\Constants;
use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(public Category $category)
    {
    }

    /**
     * Get Categories list.
     *
     * @return \App\Models\Category $category
     */
    public function getList($hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        $query = $this->category;
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }

    /**
     * Get Sub Categories list by parent.
     *
     * @return object
     */
    public function getSubCategoriesByParentId($parentId, $hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        $query = $this->category->where('parent_id', $parentId);
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }

    /**
     * Get Category
     *
     * @return object
     */
    public function getCategory($field, $value)
    {
        return $this->category->where($field, $value)->first();
    }

}
