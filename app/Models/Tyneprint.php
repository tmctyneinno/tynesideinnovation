<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tyneprint extends Model
{
    protected $fillable = [
        'title','slug','content','image'
    ];
}
