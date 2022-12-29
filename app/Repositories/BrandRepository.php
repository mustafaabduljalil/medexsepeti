<?php
namespace App\Repositories;

use App\Constants\Constants;
use App\Interfaces\BrandRepositoryInterface;
use App\Models\Brand;

class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{
    public function __construct(public Brand $brand)
    {
    }

    /**
     * Get Brands list.
     *
     * @return \App\Models\Brand $brand
     */
    public function getList($hasPagination = false, $paginationCount = Constants::BRANDS_PAGINATION_COUNT)
    {
        $query = $this->brand;
        return $this->handleResponse($query, $hasPagination, $paginationCount);
    }

    /**
     * Get Brand
     *
     * @return object
     */
    public function getBrand($field, $value)
    {
        return $this->brand->where($field, $value)->first();
    }

}
