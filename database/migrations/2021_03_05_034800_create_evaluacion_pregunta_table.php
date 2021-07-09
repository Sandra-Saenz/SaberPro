<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionPreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_pregunta', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->unsignedBigInteger('evaluacion_id');
            $table->foreign('evaluacion_id')->references('id')->on('evaluacion')->onDelete('cascade');

            $table->unsignedBigInteger('pregunta_id');
            $table->foreign('pregunta_id')->references('id')->on('pregunta')->onDelete('cascade');

            $table->primary(['evaluacion_id', 'pregunta_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacion_pregunta');
    }
}
