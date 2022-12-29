<?php
namespace App\Interfaces;


interface BrandRepositoryInterface
{
    public function getList($hasPagination, $paginationCount);
    public function getBrand($field, $value);
}
