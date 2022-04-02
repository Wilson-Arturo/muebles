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
        Schema::create('tipo_de_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_tipo');
            $table->unsignedBigInteger('tipo_usuario');
            // $table->foreing('tipo_usuario')->references('id_tipo')->on('usuario');
            // $table->foreing('')->references('')->on('');
            $table->softDeletes();
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
        Schema::dropIfExists('tipo_de_usuario');
    }
};
