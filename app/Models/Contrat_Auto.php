<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat_Auto extends Model
{
    protected $fillable = [
        'carte_grise','permis_de_conduire','visite_technique','marque_de_voiture','type','puissance','immatriculation','carrosserie','energie','valeur_neuve','date_premiere_circulation','charge_utile','zone_geographique','users_id'
    ];
// ,'date_debut_contrat','date_fin_contrat'
     public function ObjetAssurer()
    {
        return $this->hasMany('App\ObjetAssurer');
    }

     public function garantie_Auto()
    {
        return $this->hasMany('App\Models\garantie_Auto');
    }

}
