<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->string('descripcion');
            $table->date('fecha')->nullable();
            $table->integer('cant_Preg_Asig')->nullable();
            $table->string('Asignatura_eval')->nullable();
            $table->time('tiempoEstipulado')->nullable();
            $table->enum('estado', ['Pendiente','Realizada', 'Cancelada'])->nullable();

            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('evaluacion');
    }
}
