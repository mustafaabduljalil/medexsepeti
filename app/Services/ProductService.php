<?php
namespace App\Services;

use App\Constants\Constants;
use App\Repositories\ProductRepository;

class ProductService
{
    public function __construct(protected ProductRepository $productRepository, protected $hasPagination = false, protected $productsCountPerPage = Constants::PRODUCTS_PAGINATION_COUNT)
    {
    }

    /**
     * Get Products list.
     *
     * @return \App\Models\Product $productRepository
     */
    public function getList($hasPagination = false, $paginationCount = Constants::PRODUCTS_PAGINATION_COUNT)
    {
        return $this->productRepository->getList($hasPagination, $paginationCount);
    }


    /**
     * Get Products list filter with category.
     *
     * @return array
     */
    public function getListByCategory($categoryId, $hasPagination = false, $paginationCount = Constants::PRODUCTS_PAGINATION_COUNT)
    {
        return $this->productRepository->getListByCategory($categoryId, $hasPagination, $paginationCount);

    }

    /**
     * Get Products list filter with brand.
     *
     * @return array
     */
    public function getListByBrand($brandId, $hasPagination = false, $paginationCount = Constants::PRODUCTS_PAGINATION_COUNT)
    {
        return $this->productRepository->getListByBrand($brandId, $hasPagination, $paginationCount);
    }

    /**
     * Get Product
     *
     * @return object
     */
    public function getProduct($field, $value)
    {
        return $this->productRepository->getProduct($field, $value);
    }

    /**
     * Get Products order by specific field
     *
     * @return object
     */
    public function getProductsOrderBySpecificField($field, $orderType = 'asc', $hasPagination = false, $paginationCount = Constants::PRODUCTS_PAGINATION_COUNT)
    {
        return $this->productRepository->getProductsOrderBySpecificField($field, $orderType, $hasPagination, $paginationCount);
    }

    /**
     * Get User's last visited products
     *
     * @return object
     */
    public function getUserLastVisitedProducts($productsIds, $hasPagination = false, $paginationCount = Constants::PRODUCTS_PAGINATION_COUNT)
    {
        return $this->productRepository->getUserLastVisitedProducts($productsIds, $hasPagination, $paginationCount);
    }

    /**
     * Get Products that in offers
     *
     * @return object
     */
    public function getSpecialOfferProducts($hasPagination = false, $paginationCount = Constants::OFFER_PRODUCTS_PAGINATION_COUNT)
    {
        return $this->productRepository->getSpecialOfferProducts($hasPagination, $paginationCount);
    }
}
