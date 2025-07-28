<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CareerArea extends Model
{
    use \Spatie\Translatable\HasTranslations, HasSlug;

    protected $fillable = [
        'name',
        'slug',
    ];

    // Translation fields
    public array $translatable = ['name', 'slug'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
