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
        $articulo = new Articulo();
        $articulo->titulo='Como aprobar DWES y no morir en el intento';
        $articulo->fecha='2023-02-06';
        $articulo->contenido='El truco es sencillo, solo tienes que practicar mucho y llevar todos los conocimientos al dia';
        $articulo->save();
    }
}
