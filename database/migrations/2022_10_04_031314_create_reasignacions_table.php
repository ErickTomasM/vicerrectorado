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
        Schema::create('reasignacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('designacion_id');
            $table->string('FechaReasignacion');
            $table->timestamps();
            $table->foreign('designacion_id')->references('id')->on('designacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reasignacions');
    }
};
