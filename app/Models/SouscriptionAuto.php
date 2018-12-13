<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SouscriptionAuto extends Model
{
    protected $fillable = [
        'numero_carte_grise','numero_permis_de_conduire','numero_visite_technique','nom_client','telephone','mode_paiement','users_id'
    ];
}
