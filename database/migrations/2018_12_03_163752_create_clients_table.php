<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('telephone')->nullable();
            $table->string('ville')->nullable();
            $table->string('statut')->default('personne physique');
            $table->string('date_de_naissance')->nullable();
            $table->string('rang');
            $table->integer('users_id')->foreign('users_id')->references('id')->on('users')->unique();
            $table->string('numero_client');
            $table->integer('code_agence')->foreign('code_agence')->references('code_agence')->on('agences')->index()->unsigned();
            // $table->integer('agences_id')->foreign('agences_id')->references('id')->on('agences')->index()->unsigned();
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
        Schema::dropIfExists('clients');
    }
}
