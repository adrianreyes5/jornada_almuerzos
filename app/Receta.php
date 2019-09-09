<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    public $timestamps = false;

    protected $table = "recetas";
    protected $fillable = ['nombre'];
    protected $primaryKey = 'id';

    public function Receta_Ingredientes() {
        return $this->hasMany(\App\ingrediente_receta::class,'receta_id');
    }

    public function Orden() {
        return $this->hasMany(\App\Orden::class,'receta_id');
    }

    public  static function Aleatoria() {
        $receta = Receta::all();
        $aleatoria = rand(1,$receta->count());

        $aleatoria = Receta::find($aleatoria);

        return $aleatoria;
    }

    public function Ingredientes($receta_id) {

        $ingredientes = $this->Receta_Ingredientes;
        $no_disponible = [];

        foreach($ingredientes as $ingrediente) {
            if($ingrediente->receta_id === $receta_id) {

                $ing_receta = $ingrediente->ingrediente;

                /** Si la diferencia entre ingredientes e ingredientes por receta es mayor a 0
                 *  Entonces Hay ingredientes en la bodega
                 *  Sino, No hay ingredientes diesponibles
                 */

                if(($ing_receta->cantidad - $ingrediente->cantidad_ing ) < 0) {
                    $no_disponible[] = $ing_receta;
                }

            }
        }
        return  $no_disponible;
    }

    public function IngredientesPorReceta($receta_id) {

        $ingredientes = $this->Receta_Ingredientes;
        $ingrediente_receta = [];

        foreach($ingredientes as $ingrediente) {
            if($ingrediente->receta_id === $receta_id) {

                $ingrediente_receta[] = $ingrediente;

            }
        }
        return  $ingrediente_receta;
    }
}
