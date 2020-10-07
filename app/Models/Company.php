<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function country() {
        return $this->belongsTo('App\Models\Country');
    }

    public function users() {
//        return $this->
    }
}
