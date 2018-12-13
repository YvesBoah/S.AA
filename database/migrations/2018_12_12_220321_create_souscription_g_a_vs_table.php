<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouscriptionGAVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souscription_g_a_vs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activite_prospect');
            $table->string('age_prospect');//si il est locataire
            $table->integer('montant_capital_a_garantir');
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
        Schema::dropIfExists('souscription_g_a_vs');
    }
}
