<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SouscriptionGAV extends Model
{
    protected $fillable = [
        'activite_prospect','age_prospect','montant_capital_a_garantir','nom_client','telephone','mode_paiement','users_id'
    ];
}
