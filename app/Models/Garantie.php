<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Garantie extends Model
{
     protected $fillable = [
        'garantie','code'
    ];

      public function garantie_Auto()
    {
        return $this->hasMany('App\Models\garantie_Auto');
    } 
}
