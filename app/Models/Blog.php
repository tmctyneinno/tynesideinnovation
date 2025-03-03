<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content', 
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = static::generateUniqueSlug($model->title, $model->id); 
        });

        static::updating(function ($model) {
            $model->slug = static::generateUniqueSlug($model->title, $model->id); 
        });
    }

    public static function generateUniqueSlug($title, $modelId=null)
    {
        $slug = Str::slug($title);
        $slug2 = $slug;
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
 