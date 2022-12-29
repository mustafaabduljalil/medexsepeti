<?php
namespace App\Services;

use App\Constants\Constants;
use App\Repositories\BrandRepository;

class BrandService
{
    protected $brandRepository;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * Get Brands list.
     *
     * @return \App\Models\Brand $brandRepository
     */
    public function getList($hasPagination = false, $paginationCount = Constants::BRANDS_PAGINATION_COUNT)
    {
        return $this->brandRepository->getList($hasPagination, $paginationCount);
    }

    /**
     * Get Brand
     *
     * @return object
     */
    public function getBrand($field, $value)
    {
        return $this->brandRepository->getBrand($field, $value);
    }

}
