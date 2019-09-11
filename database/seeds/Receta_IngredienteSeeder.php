<?php

use Illuminate\Database\Seeder;

class RecetaredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Receta 1 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  3,
            'cantidad'      =>  1
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  8,
            'cantidad'      =>  2
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  1
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  4,
            'cantidad'      =>  2
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  8,
            'cantidad'      =>  6
        ]);

        /** Receta 2 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  2
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  6,
            'cantidad'      =>  3
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  7,
            'cantidad'      =>  1
        ]);

        /** Receta 3 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  10,
            'cantidad'      =>  1
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  4,
            'cantidad'      =>  2
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  5,
            'cantidad'      =>  1
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  4
        ]);

        /** Receta 4 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  7,
            'cantidad'      =>  3
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  1
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  6,
            'cantidad'      =>  2
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  7
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  3,
            'cantidad'      =>  1
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  5,
            'cantidad'      =>  4
        ]);

        /** Receta 5 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  4,
            'cantidad'      =>  3
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  2
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  8,
            'cantidad'      =>  2
        ]);

        /** Receta 6 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  1,
            'cantidad'      =>  3
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  7,
            'cantidad'      =>  2
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  10,
            'cantidad'      =>  2
        ]);DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  3,
            'cantidad'      =>  3
        ]);DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  5
        ]);
    }
}