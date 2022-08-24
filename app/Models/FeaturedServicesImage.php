<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedServicesImage extends Model
{
    use HasFactory;

    public function featuredServicesCatelog(){
        return $this->belongsTo(FeaturedServicesCatelog::class);
    }
}
