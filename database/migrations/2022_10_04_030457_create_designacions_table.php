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
        Schema::create('designacions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('horario_id');
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('estudio_id');
            $table->string('Resolucion');
            $table->string('Dictamen');
            $table->string('NumeroCarta');
            $table->string('Facultad');
            $table->string('Carrera');
            $table->string('TipoDocente');
            $table->string('Gestion');
            $table->string('Semestre');
            $table->string('Convocatoria');
            $table->date('FechaDesignacion')->date_format('dd, FF, YY');
            $table->timestamps();
            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('estudio_id')->references('id')->on('estudios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designacions');
    }
};
