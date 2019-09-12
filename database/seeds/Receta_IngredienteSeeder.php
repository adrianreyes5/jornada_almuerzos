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
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  6,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  1,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 2 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  4,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  3,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 3 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  10,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  3,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  8,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 4 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  1,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  6,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  8,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  4,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  10,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 5 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  6,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 6 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  3,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  4,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  8,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  1,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 7 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  7,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  7,
            'ingrediente_id'    =>  6,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  7,
            'ingrediente_id'    =>  8,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  7,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  7,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 8 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  8,
            'ingrediente_id'    =>  1,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  8,
            'ingrediente_id'    =>  5,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  8,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  8,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  8,
            'ingrediente_id'    =>  10,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 9 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  9,
            'ingrediente_id'    =>  3,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  9,
            'ingrediente_id'    =>  7,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  9,
            'ingrediente_id'    =>  5,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  9,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  rand(1,6)
        ]);

        /** Receta 10 */
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  10,
            'ingrediente_id'    =>  2,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  10,
            'ingrediente_id'    =>  6,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  10,
            'ingrediente_id'    =>  5,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  10,
            'ingrediente_id'    =>  9,
            'cantidad'      =>  rand(1,6)
        ]);
        DB::table('ingrediente_recetas')->insert([
            'receta_id'         =>  10,
            'ingrediente_id'    =>  10,
            'cantidad'      =>  rand(1,6)
        ]);
    }
}