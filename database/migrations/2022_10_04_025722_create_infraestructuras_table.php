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
        Schema::create('infraestructuras', function (Blueprint $table) {
            //$table->id();
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('Ambiente');
            $table->string('Piso');
            $table->string('Descripcion');
            $table->string('Capacidad');
            $table->string('Equipamiento');
            $table->string('Ubicacion');
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
        Schema::dropIfExists('infraestructuras');
    }
};
