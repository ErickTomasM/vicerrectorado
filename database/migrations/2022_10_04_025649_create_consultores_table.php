<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('designacion_id');
            $table->unsignedBigInteger('estudio_id');
            $table->string('materiaC01')->nullable();
            $table->string('materiaC02')->nullable();
            $table->string('materiaC03')->nullable();
            $table->string('materiaC04')->nullable();
            $table->string('materiaC05')->nullable();
            $table->enum('Dedicacion', ['A Tiempo Completo', 'A Tiempo Horario'])->default('A Tiempo Completo', 'A Tiempo Horario');
            $table->string('contrato');
            
            #$table->foreign('designacion_id')->references('id')->on('designacions');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('designacion_id')->references('id')->on('designacions');
            $table->foreign('estudio_id')->references('id')->on('estudios');
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
        Schema::dropIfExists('consultores');
    }
};
