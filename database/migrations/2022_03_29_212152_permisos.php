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
        Schema::create('permisos', function(Blueprint $table)
        {  
            $table->bigIncrements('permiso_id');
            $table->string('nombre', 100);
        });

        /*
            De esta forma se le añade la llave foránea a la tabla
            users, luego de que la tabla permisos se haya creado.
        */
        Schema::table('users', function(Blueprint $table) {
            // El método after() indica que la columna se añadirá después de la columna id en users
            $table->unsignedBigInteger('permiso_id')->after('id');

            $table->foreign('permiso_id')->references('permiso_id')->on('permisos');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos');
    }
};
