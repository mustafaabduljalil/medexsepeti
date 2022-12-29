<?php
namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function getList($hasPagination, $paginationCount);
    public function getListByCategory($categoryId, $hasPagination, $paginationCount);
    public function getListByBrand($brandId, $hasPagination, $paginationCount);
    public function getProduct($field, $value);
    public function getProductsOrderBySpecificField($field, $orderType, $hasPagination, $paginationCount);
    public function getUserLastVisitedProducts($productsIds, $hasPagination, $paginationCount);
    public function getSpecialOfferProducts($hasPagination, $paginationCount);
}
