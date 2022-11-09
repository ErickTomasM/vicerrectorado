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
        Schema::create('datos', function (Blueprint $table) {
            //$table->id();
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('Tipo');
            $table->string('Tiempo');
            $table->string('Dato01');
            $table->string('Dato02');
            $table->string('Dato03');
            $table->string('Dato04');
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
        //
    }
};
