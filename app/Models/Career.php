<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;

class Career extends Model
{
    use HasSlug, \Spatie\Translatable\HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'department_id',
        'is_full_time',
        'is_active',
        'job_url',
    ];

    // translatable fields
    public array $translatable = ['title', 'slug', 'description'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : \Spatie\Sluggable\SlugOptions
    {
        return \Spatie\Sluggable\SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function department()
    {
        return $this->belongsTo(CareerDepartment::class, 'department_id');
    }

    /**
     * The levels that belong to the Career
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function levels(): BelongsToMany
    {
        return $this->belongsToMany(CareerLevel::class, 'career_level_career', 'career_id', 'career_level_id');
    }


    /**
     * The areas that belong to the Career
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function areas(): BelongsToMany
    {
        return $this->belongsToMany(CareerArea::class, 'career_area_career', 'career_id', 'career_area_id');
    }

}
