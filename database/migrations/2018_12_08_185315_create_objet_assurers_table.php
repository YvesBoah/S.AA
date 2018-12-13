<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetAssurersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objet_assurers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descrition_du_vehicule');
            $table->string('identité_du_vehicule');
            $table->string('description_du_proprietaire');
            $table->integer('contrat__autos_id')->foreign('contrat__autos_id')->references('id')->on('contrat__autos');
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
        Schema::dropIfExists('objet_assurers');
    }
}
