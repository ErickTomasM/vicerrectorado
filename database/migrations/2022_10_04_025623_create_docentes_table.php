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
        Schema::create('docentes', function (Blueprint $table) {
            //$table->id();
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('Nombres');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('ci')->unique();
            $table->string('Telefono');
            $table->enum('Titulo', ['Arq.', 'Lic.', 'Ing.', 'Dr.', 'Abog.'])->default('Arq.', 'Lic.', 'Ing.', 'Dr.', 'Abog.');
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
        Schema::dropIfExists('docentes');
    }
};
