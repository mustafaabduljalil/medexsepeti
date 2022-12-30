<?php

namespace App\Models;

use App\Constants\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Brand extends Model implements HasMedia
{
    use HasFactory, HasSlug, InteractsWithMedia;

    protected $fillable = ['name', 'slug'];

    protected $appends = ['thumb_image'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function products()
    {
        return $this->hasMany(Product::class,'brand_id','id');
    }

    public function getThumbImageAttribute()
    {
        return $this->getFirstMediaUrl(Constants::BRAND_MEDIA_COLLECTION_NAME) ?? asset('assets/images/default-image.png');
    }
}
