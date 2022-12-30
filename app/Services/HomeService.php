<?php
namespace App\Services;

use App\Constants\Constants;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Auth;

class HomeService
{
    public function __construct(public ProductService $productService,
                                public CategoryService $categoryService,
                                public BrandService $brandService)
    {
    }

    /**
     * Get Home data list.
     *
     * @return array
     */
    public function getHomeData()
    {
        $data['categories'] = $this->categoryService->getList(true);
        $data['brands'] = $this->brandService->getList(true,);
        $data['offersProducts'] = $this->productService->getSpecialOfferProducts(true);
        $data['mostViewedProducts'] = $this->productService->getProductsOrderBySpecificField('views', 'desc', true);
        if(Auth::check() && \auth()->user()->last_visited_products)
            $data['lastVisitedProducts'] = $this->productService->getUserLastVisitedProducts(\auth()->user()->last_visited_products);

        return $data;
    }

}
