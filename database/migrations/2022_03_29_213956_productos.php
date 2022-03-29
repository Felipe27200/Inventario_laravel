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
        Schema::create('productos', function (Blueprint $table)
        {
            $table->bigIncrements('producto_id');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('user_id');

            $table->string('descripcion', 250);
            $table->string('imagen');

            $table->foreign('categoria_id')->references('categoria_id')->on('categorias');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
