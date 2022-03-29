<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /*
            Este método llama y ejecuta el método run()
            que hay en otros seeders, ya que esta clase
            es la única que tiene capacidad para ejecutarlos.
        */
        $this->call([permisoSeeder::class]);
    }
}
