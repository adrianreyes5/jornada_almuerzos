<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(Tipo_IngredienteSeeder::class);
        $this->call(IngredienteSeeder::class);
        $this->call(RecetaSeeder::class);
        $this->call(RecetaredienteSeeder::class);
    }
}
