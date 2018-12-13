<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SouscriptionMRH extends Model
{
    protected $fillable = [
        'statut','loyer','valeur_batiment','nom_client','telephone','mode_paiement','users_id'
    ];
}
