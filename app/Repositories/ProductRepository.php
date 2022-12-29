<?php


namespace App\Repositories;

use App\Constants\Constants;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(protected Product $product, protected $hasPagination = false, protected $productsCountPerPage = Constants::PRODUCTS_PAGINATION_COUNT)
    {
    }

    /**
     * Get Products list.
     *
     * @return \App\Models\Product $product
     */
    public function getList($hasPagination = false, $paginationCount = Constants::PRODUCTS_PAGINATION_COUNT)
    {
        $query = $this->getValidProduct();
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }


    /**
     * Get Products list filter with category.
     *
     * @return array
     */
    public function getListByCategory($categoryId, $hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        $query = $this->getValidProduct()->where('category_id', $categoryId);
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }

    /**
     * Get Products list filter with brand.
     *
     * @return array
     */
    public function getListByBrand($brandId, $hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        $query = $this->getValidProduct()->where('brand_id', $brandId);
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }

    /**
     * Get Product
     *
     * @return object
     */
    public function getProduct($field, $value)
    {
        return $this->getValidProduct()->where($field, $value)->first();
    }

    /**
     * Get Products order by specific field
     *
     * @return object
     */
    public function getProductsOrderBySpecificField($field, $orderType = 'asc', $hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        $query = $this->getValidProduct()->orderBy($field, $orderType);
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }

    /**
     * Get user last visited products
     *
     * @return object
     */
    public function getUserLastVisitedProducts($productsIds, $hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        $query = $this->getValidProduct()->whereIn('id', $productsIds);
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }

    /**
     * Get user last visited products
     *
     * @return object
     */
    public function getSpecialOfferProducts($hasPagination = false, $paginationCount = Constants::CATEGORIES_PAGINATION_COUNT)
    {
        $query = $this->getValidProduct()->validOffers()->whereNotNull('discount');
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }

    /**
     * Get active & in stock product
     *
     * @return $this
     */
    public function getValidProduct()
    {
        return $this->product->active()->inStock();
    }
}
