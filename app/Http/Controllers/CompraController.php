<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Compra;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::orderBy('id', 'desc')->paginate(5);

        return view('compras.index', compact(['compras']));
    }

}
