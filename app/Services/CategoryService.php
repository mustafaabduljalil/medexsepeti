<?php
namespace App\Services;

use App\Constants\Constants;
use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Get Categories list.
     *
     * @return \App\Models\Category $categoryRepository
     */
    public function getList($hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        return $this->categoryRepository->getList($hasPagination, $paginationCount);
    }

    /**
     * Get Sub Categories list by parent.
     *
     * @return
     */
    public function getSubCategoriesByParentId($parentId, $hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        return $this->categoryRepository->getSubCategoriesByParentId($parentId, $hasPagination, $paginationCount);
    }

    /**
     * Get Category
     *
     * @return object
     */
    public function getCategory($field, $value)
    {
        return $this->categoryRepository->getCategory($field, $value);
    }

}
