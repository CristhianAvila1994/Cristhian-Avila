<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Registro;
use App\Models\Vendedor;
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
        $this->call([
             ClienteSeeder::class,
             RegistroSeeder::class,
             VendedorSeeder::class
        ]);
    }
}
