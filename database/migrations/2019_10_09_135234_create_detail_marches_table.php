<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailMarchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_marches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('total_htva_avr');
            $table->bigInteger('total_htva_apr');
            $table->string('rabais');
            $table->string('tva');
            $table->string('air');
            $table->bigInteger('ttc');
            $table->text('transport');
            $table->text('assurance');
            $table->bigInteger('neta_percevoir');
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
        Schema::dropIfExists('detail_marches');
    }
}
