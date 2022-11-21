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
            $table->date('FechaDesignacion')->date_format('dd, FF, YY');
            $table->string('Resolucion')->nullable();
            $table->string('Dictamen');
            $table->integer('NumeroCarta');
            $table->string('Facultad');
            $table->string('Carrera');
            $table->string('Gestion');
            $table->string('Semestre');
            
            
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
        Schema::dropIfExists('designacions');
    }
};
