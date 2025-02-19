<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PortfolioCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->name); 
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->name); 
        });
    }
}
 