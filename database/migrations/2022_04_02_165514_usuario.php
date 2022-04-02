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
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nombre');
            $table->integer('contraseña');
            $table->string('direccion');
            $table->string('correo');
            $table->unsignedBigInteger('id_tipo');
            // $table->foreign('id_usuario')->references('id_usuario')->on('venta')->onDelete('cascade');
            // $table->foreing('id_tipo')->references('tipo_usuario')->on('tipo_de_usuario');
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
        Schema::dropIfExists('usuario');
    }
};
