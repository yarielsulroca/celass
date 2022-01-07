<?php

namespace Database\Seeders;

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
        $this->call(TiposCursosSeeder::class);
        //*** Creando los Roles */
        $this->call(RoleSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(UsuariosSeeder::class);
    }
}
