<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouscriptionAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souscription_autos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_carte_grise');
            $table->string('numero_permis_de_conduire');
            $table->string('numero_visite_technique');
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
        Schema::dropIfExists('souscription_autos');
    }
}
