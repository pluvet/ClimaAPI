<?php

namespace Database\Seeders;

use App\Models\consulta;
use Database\Factories\cityFactory;
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
        consulta::factory(10)->create();
    }
}
