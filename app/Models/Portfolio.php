<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title','category_id','slug','content','image','video','link'
    ];

    public function portfolioCategory() {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
    
}
