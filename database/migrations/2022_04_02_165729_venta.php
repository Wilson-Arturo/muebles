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
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id_venta');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_metodo');
            $table->integer('subtotal');
            $table->integer('total');


            // declaracion de las llaves foraneas
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario')->onDelete('cascade');
            // $table->foreign('id_metodo')->references('id_metodo')->on('metodo_pago')->onDelete('cascade');
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
        Schema::dropIfExists('venta');
    }
};
