<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Distribution extends Model implements HasMedia
{

    use HasSlug, HasTranslations, InteractsWithMedia;

    public const FIT_CONTAIN = 'contain';
    public const FIT_MAX = 'max';
    public const FIT_FILL = 'fill';
    public const FIT_FILL_MAX = 'fill-max';
    public const FIT_STRETCH = 'stretch';
    public const FIT_CROP = 'crop';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'attribute', 'menu_name'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'attribute' => 'array',
    ];


    /**
     * The attributes that should be translatable.
     *
     * @var array
     */
    public array $translatable = ['name', 'description', 'menu_name'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : \Spatie\Sluggable\SlugOptions
    {
        return \Spatie\Sluggable\SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->usingLanguage('en'); // Specify the default language for slug generation
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('distribution_thumbnails')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);

        $this->addMediaCollection('distribution_images')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);

    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('webp_render')
            ->performOnCollections('distribution_images')
            ->format('webp')
            ->nonQueued()
            ->optimize();

        $this->addMediaConversion('webp_render_home')
            ->performOnCollections('distribution_thumbnails')
            ->format('webp')
            ->fit(Fit::Crop, 556, 424)
            ->nonQueued();

        $this->addMediaConversion('webp_blur')
            ->format('webp')
            ->performOnCollections('distribution_thumbnails', 'distribution_images')
            ->fit(Fit::Crop, 300, 300)
            ->blur(10)
            ->nonQueued()
            ->optimize();

        $this->addMediaConversion('png_render')
            ->performOnCollections('distribution_thumbnails', 'distribution_images')
            ->format('png')
            ->nonQueued()
            ->optimize();

    }

}
