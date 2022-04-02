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
        Schema::create('detalle', function (Blueprint $table) {
            $table->bigIncrements('id_detalle');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_venta');
            
            $table->foreign('id_venta')->references('id_venta')->on('venta')->onDelete('cascade');
            $table->foreign('id_producto')->references('id_productos')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('detalle');
    }
};
