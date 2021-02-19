<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string("nombre");
            $table->id('cantidad');
            $table->string('descripcion');
            $table->double('precio');
            $table->string('id_status');
            $table->string('imagen');
            $table->string('id_categoria');
            $table->string('id_usuario');
            $table->id('id_cliente');
            $table->id('id_venta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productos');
    }
}
