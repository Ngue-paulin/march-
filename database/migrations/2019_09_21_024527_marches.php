<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Marches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marches', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('reference')->unique();
        $table->string('secteur_marche');
        $table->date('date_debut');
        $table->date('date_fin');
        $table->date('date_livréson');
        $table->string('statut');
        $table->string('type_marche');
        $table->bigInteger('montant');
        $table->string('maitre_oeuvre');
        $table->string('delai_livreson');
        $table->string('lieu_livreson');
        $table->string('financement');
        $table->string('imputation');
        $table->text('description');
        $table->unsignedBigInteger('user_id')->index();
        //$table->unsignedBigInteger('prestataire_id')->index()->default(null);
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
        Schema::dropIfExists('marches');
    }
}
