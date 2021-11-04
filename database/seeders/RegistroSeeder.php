<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Registro;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registro::Factory(500)->create();
    }
}
