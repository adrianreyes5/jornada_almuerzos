<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recetas')->insert([
            'nombre' => 'receta 1'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 2'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 3'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 4'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 5'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 6'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 7'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 8'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 9'
        ]);
        DB::table('recetas')->insert([
            'nombre' => 'receta 10'
        ]);
    }
}
