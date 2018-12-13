<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class garantie_Auto extends Model
{
    protected $fillable = [
        'contrat__autos_id','garanties_id','objet_assurers_id','users_id'
    ];

     public function Contrat_Auto()
    {
        return $this->belongsTo('App\Models\Contrat_Auto');
    } 
    public function ObjetAssurer()
    {
        return $this->hasMany('App\ObjetAssurer');
    }
     public function Garantie()
    {
        return $this->belongsTo('App\Models\Garantie');
    }
}
