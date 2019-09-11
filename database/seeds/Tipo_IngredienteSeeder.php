<?php

use Illuminate\Database\Seeder;

class Tipo_IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_ingrediente')->insert([
            'nombre' => 'Vegetal'
        ]);
        DB::table('tipo_ingrediente')->insert([
            'nombre' => 'Carnes'
        ]);
        DB::table('tipo_ingrediente')->insert([
            'nombre' => 'Frutas'
        ]);
        DB::table('tipo_ingrediente')->insert([
            'nombre' => 'Salsas'
        ]);
        DB::table('tipo_ingrediente')->insert([
            'nombre' => 'Granos'
        ]);
        DB::table('tipo_ingrediente')->insert([
            'nombre' => 'Charcuteria'
        ]);
    }
}
