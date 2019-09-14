<?php

namespace App\Http\Controllers;

use App\Events\OrdenCreada;
use App\Jobs\Compras;
use App\Ingrediente_Receta;
use App\Orden;
use Illuminate\Http\Request;
use App\Receta;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cocina.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receta = Receta::Aleatoria();
        $ingredienteNoDisp = $receta->IngredienteNoDisp($receta->id);
        $fecha = new Carbon();
        $orden = new Orden();

        if (!$ingredienteNoDisp) {
            $orden->estado_entrega  = true;
            $orden->fecha           = $fecha;
            $orden->user_id         = Auth::user()->id;
            $orden->receta_id       = $receta->id;
            $orden->save();

            event(new OrdenCreada($receta));
        } else {
            $orden->estado_entrega  = false;
            $orden->fecha           = $fecha;
            $orden->receta_id       = $receta->id;
            $orden->user_id         = Auth::user()->id;
            $orden->save();

            $recetaIngrediente = Ingrediente_Receta::IngredientePorReceta($receta->id);

            foreach ($recetaIngrediente as $ingrediente_id => $cantidad) {
                $acum = 0;
                Compras::dispatch($receta, $orden, $ingrediente_id, $cantidad, $acum);
            }
        }

        return redirect()->route('cocina.index');
    }
}
