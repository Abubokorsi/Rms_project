<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Special_item extends Model
{
    use HasFactory;

    public function special_category(){
        return $this->belongsTo('App\Models\SpecialCategory');
    }
}
