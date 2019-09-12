<?php

namespace App\Http\Controllers;

use App\Events\OrdenCreada;
use App\Orden;
use Illuminate\Http\Request;
use App\Receta;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receta = Receta::Aleatoria();
        $recetaNoDisp = $receta->RecetaNoDisp($receta->id);

        $orden = new Orden();
        $fecha = new Carbon();

        if(!$recetaNoDisp) {
            $orden->estado_entrega  = true;
            $orden->fecha           = $fecha;
            $orden->user_id         = Auth::user()->id;
            $orden->receta_id       = $receta->id;
            $orden->save();

            event(new OrdenCreada($receta));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
