<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetAssurer extends Model
{
    protected $fillable = [
        'descrition_du_vehicule','identité_du_vehicule','description_du_proprietaire','contrat__autos_id','users_id'
    ];

     public function Contrat_Auto()
    {
        return $this->belongsTo('App\Models\Contrat_Auto');
    }
    
	 public function garantie_Auto()
    {
        return $this->belongsTo('App\Models\garantie_Auto');
    }

}
