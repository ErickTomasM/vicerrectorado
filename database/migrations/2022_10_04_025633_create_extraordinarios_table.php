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
        Schema::create('extraordinarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            #$table->unsignedBigInteger('designacion_id');
            $table->unsignedBigInteger('docente_id');
            $table->enum('TipoDocente', ['Extraordinario Interino','Extraordinario Sin Continuidad','Invitado','Contratado']);
            $table->enum('Convocatoria', ['Primera Convocatoria', 'Segunda Convocatoria','Tercera Convocatoria', 'Por Invitacion']);
            #$table->foreign('designacion_id')->references('id')->on('designacions');
            $table->foreign('docente_id')->references('id')->on('docentes');
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
        Schema::dropIfExists('titulares');
    }
};
