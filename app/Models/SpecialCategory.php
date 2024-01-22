<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialCategory extends Model
{
    use HasFactory;

    public function special_items(){
        return $this->hasMany('App\Models\Special_item');
    }
}
