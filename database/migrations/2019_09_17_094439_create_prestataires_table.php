<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('statut_juridique');
            $table->string('entreprise');
            $table->string('responsable');
            $table->string('profession');
            $table->string('secteur_activite');
            $table->string('tel');
            $table->string('email');
            $table->string('cni');
            $table->string('ville');
            $table->string('boite_postale');
            $table->string('numero_contrib');
            $table->string('numero_rg');
            $table->bigInteger('numero_compbanck');
            $table->string('banck');
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
        Schema::dropIfExists('prestataires');
    }
}
