<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandFoodAlcohol extends Model
{
    protected $fillable = [
        'name',
        'image',
    ];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
