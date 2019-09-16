<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredienteRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_recetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('receta_id')->unsigned();
            $table->integer('ingrediente_id')->unsigned();
            $table->integer('cantidad');

            $table->foreign('receta_id')->references('id')->on('recetas')->onDelete('cascade');
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingrediente_recetas');
    }
}
