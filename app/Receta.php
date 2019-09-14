<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    public $timestamps = false;

    protected $table = "recetas";
    protected $fillable = ['nombre'];
    protected $primaryKey = 'id';

    public function RecetaIngredientes() {
        return $this->hasMany(\App\Ingrediente_Receta::class,'receta_id');
    }

    public function Orden() {
        return $this->hasMany(\App\Orden::class,'receta_id');
    }

    public function scopeAleatoria() {
        $receta = Receta::all();
        $aleatoria = rand(1,$receta->count());
        $aleatoria = Receta::find($aleatoria);

        return $aleatoria;
    }

    public function IngredienteNoDisp($id) {
        $recetas = $this->RecetaIngredientes()->whereReceta_id($id)->get();
        $noDisp = array();

        foreach($recetas as $receta) {
            $ingrediente = $receta->Ingrediente;
            $resta = ($ingrediente['cantidad'] - $receta['cantidad']);

            if( $resta < 0 ) {
                $noDisp[] = $ingrediente;
            }
        }
        return $noDisp;
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
