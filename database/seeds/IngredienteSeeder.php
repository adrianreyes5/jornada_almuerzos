<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredientes')->insert([
            'nombre'    => 'tomato',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '1'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'lemon',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '3'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'potato',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '1'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'rice',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '5'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'ketchup',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '4'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'lettuce',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '1'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'onion',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '1'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'cheese',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '6'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'meat',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '2'
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'chicken',
            'cantidad'  =>   '10',
            'tipo_ingrediente_id' => '2'
        ]);
    }
}
