<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingrediente;
use App\ingrediente_receta;
use App\Receta;

class BodegaController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        $recetas = Receta::all();

        return view('bodega.index', compact(['ingredientes', 'recetas']));
    }
}
