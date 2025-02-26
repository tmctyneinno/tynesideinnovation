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
            $model->slug = Str::generateUniqueSlug($model->name); 
        });

        static::updating(function ($model) {
            $model->slug = Str::generateUniqueSlug($model->name); 
        });
    }


    public static function generateUniqueSlug($title, $modelId=null)
    {
        $slug = Str::slug($title);$slug2 = $slug;
        $counter = 1;

        while(static::where('slug', $slug)
                        ->where('id', '!=',$modelId)
                        ->exists())
                        {
                $slug = "{$slug2}-{$counter}";
                $counter++;
                        };
            return $slug;
    }
}
 