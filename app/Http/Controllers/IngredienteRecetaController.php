<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente_Receta;

class IngredienteRecetaController extends Controller
{
    public function CambiarCantidad(Request $request) {

        $ingredienteReceta = Ingrediente_Receta::all();
        $cantidades = array();
        
        foreach($ingredienteReceta as $ir) {
            $ir->update(['cantidad' => rand(1,6)]);
            $cantidades[$ir->id] = $ir->cantidad;
        }

        return response()->json(['success' => 'Actualizado exitosamente', 'data' => $cantidades]);
    }
}
