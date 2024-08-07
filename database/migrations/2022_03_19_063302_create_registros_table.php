<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->string('nombre')->default();
            $table->string('categoria')->default();
            $table->string('subcategoria')->default();
            $table->string('framework')->default();
            $table->string('foto',4000)->default();
            $table->string('enlace')->default();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('registros');
    }
}
