<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat__autos', function (Blueprint $table) {
            $table->increments('id');
             // Document à fournir
            $table->string('carte_grise');
            $table->string('permis_de_conduire');
            $table->string('visite_technique');
            // Document à fournir
            // Infos supplémentaires
            $table->string('marque_de_voiture');
            $table->string('type');
            $table->string('puissance');
            $table->string('immatriculation');
            $table->string('carrosserie');
            $table->string('energie');
            $table->integer('valeur_neuve');
            $table->date('date_premiere_circulation');
            $table->string('charge_utile');
            $table->string('zone_geographique');
            // Sera comuniquer àprès 
            // $table->date('date_debut_contrat')->nullable();
            // $table->date('date_fin_contrat')->nullable();

            // Infos supplémentaires
            $table->integer('users_id')->foreign('users_id')->references('id')->on('users')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrat__autos');
    }
}
