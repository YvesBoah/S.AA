<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouscriptionMRHsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souscription_m_r_hs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('statut');//proprietaire ou locataire
            $table->integer('loyer')->nullable();//si il est locataire
            $table->string('valeur_batiment');
            $table->string('nom_client');
            $table->string('telephone');
            $table->string('mode_paiement');
            $table->integer('users_id')->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('souscription_m_r_hs');
    }
}
