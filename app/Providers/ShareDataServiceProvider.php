<?php

namespace App\Providers;

use App\Services\BrandService;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ShareDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Cache::remember('parentCategories', 600, function () {
            return DB::table('categories')->whereNull('parent_id')->get();
        });

        Cache::remember('childCategories', 600, function () {
            return DB::table('categories')->whereNotNull('parent_id')->get()->groupBy('parent_id')->toArray();
        });

        Cache::remember('brandsList', 600, function () {
            return DB::table('brands')->get();
        });
    }
}
