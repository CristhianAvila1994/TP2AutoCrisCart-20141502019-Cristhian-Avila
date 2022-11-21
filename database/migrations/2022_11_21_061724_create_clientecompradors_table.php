<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateclientecompradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientecompradors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->char('identidad');
            $table->char('telefono');
            $table->string('email');
            $table->string('Direccion');
            $table->string('fotocarro');
            $table->string('placa');
            $table->integer('totalPago');
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
        Schema::dropIfExists('clientecompradors');
    }
}
