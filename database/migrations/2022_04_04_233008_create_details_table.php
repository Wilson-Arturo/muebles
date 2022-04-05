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
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id_detalle');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id_producto')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('id_venta');
            $table->foreign('id_venta')->references('id_venta')->on('sales')->onDelete('cascade');
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
        Schema::dropIfExists('details');
    }
};
