<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelCatelog extends Model
{
    use HasFactory;
    protected $table="travel_catelogs";

    public function cityDetails(){
        return $this->hasOne(\App\Models\City::class,'travel_catelogs_id','id');
    }
}
