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
        Schema::create('stocks', function(Blueprint $table)
        {
            // Index
            $table->bigIncrements('stock_id');
            $table->unsignedBigInteger('producto_id');

            $table->unsignedBigInteger('factura');
            $table->dateTime('fecha');
            $table->bigInteger('cantidad');
            $table->enum('naturaleza', ['entrada', 'salida']);

            // Set foreign key
            $table->foreign('producto_id')->references('producto_id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
