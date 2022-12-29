<?php
namespace App\Interfaces;


interface CategoryRepositoryInterface
{
    public function getList($hasPagination, $paginationCount);
    public function getSubCategoriesByParentId($parentId, $hasPagination, $paginationCount);
    public function getCategory($field, $value);
}
