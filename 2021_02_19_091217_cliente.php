<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//entero
            $table->string('name');//varchar, letras
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//guardar fechas del correo electronico
            $table->string('password');//almacena las contraseñas
            $table->rememberToken();//mantener la secion iniciada de dos columnas
            $table->timestamps();//fecha y hora del registro del suario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cliente');
    }
}
