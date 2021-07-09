<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleInformeCompetenciaEspecificaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle-informe-competencia-especifica', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->integer('puntuacion_comp_espe_1')->nullable();
    		$table->integer('puntuacion_comp_espe_2')->nullable();
    	    $table->integer('puntuacion_comp_espe_3')->nullable();

            $table->unsignedBigInteger('informe_id');
            $table->foreign('informe_id')->references('id')->on('informe')->onDelete('cascade');
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
        Schema::dropIfExists('detalle-informe-competencia-especifica');
    }
}
