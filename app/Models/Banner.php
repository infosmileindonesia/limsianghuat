<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'image',
        'url',
        'type',
        'button_text',
    ];

    public array $translatable = ['title', 'button_text'];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
