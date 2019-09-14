<?php

namespace App\Http\Controllers;

use App\Compra;
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
        $compras = Compra::orderBy('id', 'desc')->paginate(30);

        foreach($ordenes as $orden) {
            $fecha = new Carbon($orden->fecha);

            $orden['fecha'] = $fecha->diffForHumans();
        }
        /**Retorno lista de Pedidos */
        return view('cocina.index', compact(['ordenes', 'ingredientes', 'compras']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('cocina.index');
    }
}
