<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle_agence', 'code_agence','reseau'
    ];



    public function Client()
    {
        return $this->hasMany('App\Models\Client');
    }

}
