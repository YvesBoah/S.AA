<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   protected $fillable = [
        'nom','date_de_naissance','Statut','prenom','telephone','ville','code_agence','numero_client','rang','users_id'
    ];



    public function Agence()
  	{
  		return $this->belongsTo('App\Agence');
  	}
}
