<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receta;
use App\Ingrediente;
use App\Orden;
use App\Jobs\Compras;
use Illuminate\Support\Carbon;

class CocinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('es');
        $ordenes = Orden::orderBy('id', 'desc')->paginate(5);

        $ingredientes = Ingrediente::all();

        foreach($ordenes as $orden) {
            $fecha = new Carbon($orden->fecha);

            $orden['fecha'] = $fecha->diffForHumans();
        }
        /**Retorno lista de Pedidos */
        return view('cocina.index', compact(['ordenes', 'ingredientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disponible = false;
        $fecha = Carbon::now();
        $receta = Receta::Aleatoria(); /** Creo receta Aleatoria */

        $ing_disponible =  $receta->Ingredientes($receta->id); /** Retorna ingredientes disponibles de la bodega */
        $ingrediente_receta = $receta->IngredientesPorReceta($receta->id); /**Retorna Ingredientes por receta */

        if(count($ing_disponible) === 0) {
            $disponible = true;
            /** Hay ingredientes en la bodega y creo la orden */
            $crearOrden = Orden::create([
                'receta_id'         =>   $receta->id,
                'estado_entrega'    =>   'Entregado',
                'fecha'             =>   $fecha
            ]);
            foreach($ingrediente_receta as $ingrediente) {
                /** Busco el ingrediente para actualizar la cantidad */
                $ing = Ingrediente::where('id',$ingrediente->ingrediente_id )->first();

                $resta_ing = ($ing->cantidad - $ingrediente->cantidad_ing);
                $ing->update(['cantidad' => $resta_ing]); /** Actualizo la bodega */
            }
            return redirect()->route('cocina.index');

        }else {
            /** No hay cantidad suficiente en la bodega */
            /** Creo la orden en espera */
            $orden = Orden::create([
                'receta_id'         =>   $receta->id,
                'estado_entrega'    =>   'En espera',
                'fecha'             =>   $fecha
            ]);

            foreach($ingrediente_receta as $ingrediente) {
                /** Busco los ingredientes por receta
                 *  para verificar cual no tiene cantidad disponible */
                $ing = Ingrediente::where('id',$ingrediente->ingrediente_id )->first();
                Compras::dispatch($orden->id, $ing->id,$receta->id,$ing->cantidad);/**LLevo la compra a una cola */
            }
        }

        return redirect()->route('cocina.index');
    }
}
