<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaAsignaturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_asignatura', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->unsignedBigInteger('programa_id');
            $table->foreign('programa_id')->references('id')->on('programa')->onDelete('cascade');

            $table->unsignedBigInteger('asignatura_id');
            $table->foreign('asignatura_id')->references('id')->on('asignatura')->onDelete('cascade');

            $table->primary(['programa_id', 'asignatura_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa_asignatura');
    }
}
