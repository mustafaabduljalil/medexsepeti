<?php

namespace App\Models;

use App\Constants\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, HasSlug, InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'barcode',
        'short_description',
        'long_description',
        'price',
        'quantity',
        'views',
        'discount',
        'discount_type',
        'discount_start_at',
        'discount_end_at',
        'status',
        'category_id',
        'brand_id'
    ];

    protected $appends = ['thumb_image'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'discount_start_at' => 'datetime',
        'discount_end_at' => 'datetime',
        'views' => 'integer',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', Constants::ACTIVE_STATUS);
    }

    public function scopeInStock($query)
    {
        return $query->where('quantity', '>', 0);
    }

    public function scopeValidOffers($query)
    {
        return $query->where('discount_start_at', '<=', now()->toDateTimeString())
                    ->where('discount_end_at', '>=', now()->toDateTimeString());
    }

    public function getThumbImageAttribute()
    {
        return $this->getFirstMediaUrl(Constants::PRODUCT_MEDIA_COLLECTION_NAME) ?? asset('assets/images/default-image.png');
    }
}
