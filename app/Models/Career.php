<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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

    public function levels()
    {
        return $this->morphToMany(CareerLevel::class, 'career_level', 'career_level_career');
    }

    public function areas()
    {
        return $this->morphToMany(CareerArea::class, 'career_area', 'career_area_career');
    }

}
