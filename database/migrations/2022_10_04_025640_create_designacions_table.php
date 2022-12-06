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
            $table->enum('Facultad', ['Derecho', 'Ciencias Economicas Financieras Administrativas', 'Ciencias Puras','Ciencias Sociales Humanisticas', 'Ciencias de la Salud', 'Ciencias Agricolas Pecuarias',
            'Ingenieria', 'Ingenieria Minera','Ingenieria Geologica', 'Artes','Ingenieria Tecnologica', 'Medicina'])->default('Derecho', 'Ciencias Economicas Financieras Administrativas', 'Ciencias Puras','Ciencias Sociales Humanisticas', 'Ciencias de la Salud', 'Ciencias Agricolas Pecuarias',
            'Ingenieria', 'Ingenieria Minera','Ingenieria Geologica', 'Artes','Ingenieria Tecnologica', 'Medicina');
            
            $table->string('Carrera');
            $table->enum('Gestion',['2022','2023', '2024','2025', '2026','2027', '2028','2029', '2030'])->default('2022','2023', '2024','2025', '2026','2027', '2028','2029', '2030');
            $table->enum('Semestre',['Gestion Academica', 'Semestre I', 'semestre II'])->default('Gestion Academica', 'Semestre I', 'semestre II');
            
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
