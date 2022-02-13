<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Articulo::factory(30)->create();
    }
}
