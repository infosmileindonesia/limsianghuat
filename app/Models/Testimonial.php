<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{

    use HasTranslations;


    protected $fillable = [
        'name',
        'position',
        'company',
        'image',
        'content',
    ];

    public array $translatable = ['name', 'position'];
}
