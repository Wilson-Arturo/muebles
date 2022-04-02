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
        Schema::create('metodo_pago', function (Blueprint $table) {
            $table->bigIncrements('id_metodo');
            $table->string('tipo_metodo');
            // $table->foreign('id_metodo')->references('id_metodo')->on('metodo_pago')->onDelete('cascade');
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
        Schema::dropIfExists('metodo_pago');
    }
};
