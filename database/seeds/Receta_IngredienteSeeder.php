<?php

use Illuminate\Database\Seeder;

class Receta_IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Receta 1 */
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  3,
            'cantidad_ing'      =>  1
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  8,
            'cantidad_ing'      =>  2
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  1,
            'ingrediente_id'    =>  9,
            'cantidad_ing'      =>  1
        ]);

        /** Receta 2 */
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  2,
            'cantidad_ing'      =>  2
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  6,
            'cantidad_ing'      =>  3
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  2,
            'ingrediente_id'    =>  7,
            'cantidad_ing'      =>  1
        ]);

        /** Receta 3 */
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  10,
            'cantidad_ing'      =>  1
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  4,
            'cantidad_ing'      =>  2
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  3,
            'ingrediente_id'    =>  5,
            'cantidad_ing'      =>  1
        ]);

        /** Receta 4 */
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  7,
            'cantidad_ing'      =>  3
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  4,
            'ingrediente_id'    =>  2,
            'cantidad_ing'      =>  1
        ]);

        /** Receta 5 */
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  4,
            'cantidad_ing'      =>  3
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  9,
            'cantidad_ing'      =>  2
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  5,
            'ingrediente_id'    =>  8,
            'cantidad_ing'      =>  2
        ]);

        /** Receta 6 */
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  1,
            'cantidad_ing'      =>  3
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  7,
            'cantidad_ing'      =>  2
        ]);
        DB::table('recetas_has_ingredientes')->insert([
            'receta_id'         =>  6,
            'ingrediente_id'    =>  10,
            'cantidad_ing'      =>  2
        ]);
    }
}
