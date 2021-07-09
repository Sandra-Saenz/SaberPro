<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleInformeCompetenciaGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle-informe-competencia-general', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
    		$table->integer('puntaje_ingles');
    		$table->integer('puntaje_lectura_critica');
    		$table->integer('puntaje_compe_ciudadana');
    		$table->integer('puntaje_razon_cuantitativo');
    		$table->integer('puntaje_comu_escrita')->nullable();
            $table->integer('puntaje_global');

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
        Schema::dropIfExists('detalle-informe-competencia-general');
    }
}
