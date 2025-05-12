<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandAlcohol extends Model
{
    const TYPE_BEER = 'beer';
    const TYPE_WINE = 'wine';
    const TYPE_SPIRIT = 'spirit';
    const TYPE_CIDER = 'cider';
    const TYPE_SOJU = 'soju';

    const TYPES = [
        self::TYPE_BEER,
        self::TYPE_WINE,
        self::TYPE_SPIRIT,
        self::TYPE_CIDER,
        self::TYPE_SOJU,
    ];

    const TYPES_LABELS = [
        self::TYPE_BEER => 'Beer',
        self::TYPE_WINE => 'Wine',
        self::TYPE_SPIRIT => 'Spirit',
        self::TYPE_CIDER => 'Cider',
        self::TYPE_SOJU => 'Soju',
    ];

    protected $fillable = [
        'name',
        'image',
        'type',
    ];

}
