<?php

namespace App\Constants;

class Constants
{
    const OFFER_PRODUCTS_PAGINATION_COUNT = 9;
    const PRODUCTS_PAGINATION_COUNT = 15;
    const CATEGORIES_PAGINATION_COUNT = 15;
    const BRANDS_PAGINATION_COUNT = 15;
    const DISCOUNT_PERCENT_TYPE = 'percent';
    const DISCOUNT_FIXED_VALUE_TYPE = 'fixed';
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';

    const PRODUCT_MEDIA_COLLECTION_NAME = 'products';
    const BRAND_MEDIA_COLLECTION_NAME = 'brands';
    const CATEGORY_MEDIA_COLLECTION_NAME = 'categories';


    const DISCOUNT_TYPES = [
      self::DISCOUNT_PERCENT_TYPE,
      self::DISCOUNT_FIXED_VALUE_TYPE
    ];
}
