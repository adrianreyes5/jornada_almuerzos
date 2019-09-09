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
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'lemon',
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'potato',
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'rice',
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'ketchup',
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'lettuce',
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'onion',
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'cheese',
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'meat',
            'cantidad'  =>   '5',
        ]);
        DB::table('ingredientes')->insert([
            'nombre'    => 'chicken',
            'cantidad'  =>   '5',
        ]);
    }
}
