<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarantieAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garantie__autos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('garanties_id')->foreign('garanties_id')->references('id')->on('garanties')->nullable();
            $table->integer('contrat__autos_id')->foreign('contrat__autos_id')->references('id')->on('contrat__autos');
            $table->integer('objet_assurers_id')->foreign('objet_assurers_id')->references('id')->on('objet_assurers');
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
        Schema::dropIfExists('garantie__autos');
    }
}
