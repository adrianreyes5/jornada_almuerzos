@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card border-top-info">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-start">
                            <h6 class="mt-2">Ingredientes</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless table-sm tx-nowrap">
                            <thead class="border-bottom">
                                <th>#</th>
                                <th>Nombre</th>
                                <th class="">Cantidad</th>
                                <th class="">Tipo de ingrediente</th>
                            </thead>
    
                            @if ($ingredientes->isEmpty())
                                <tbody>
                                    <td>No hay ingredientes</td>
                                </tbody>
                            @endif
    
                            @foreach ($ingredientes as $ingrediente)
                                <tbody class="">
                                    <td>{{$ingrediente->id}}</td>
                                    <td>{{$ingrediente->nombre}}</td>
                                    <td class="d-none d-md-table-cell">{{$ingrediente->cantidad}}</td>    
                                    <td class="d-none d-md-table-cell">{{$ingrediente->Tipo_Ingrediente->nombre}}</td>    
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-top-info">
                <div class="card-body">
                    <div class="card-title">
                        <h6 class="mt-2">Recetas con ingredientes</h6>
                    </div>
                    @foreach ($recetas as $receta)
                        <div id="accordion">
                            <div class="card mb-2">
                                <div class="card-header">
                                    <a href="#accordion{{$receta->id}}" class="text-body collapsed h6" data-toggle="collapse" aria-expanded="
                                    ">{{$receta->nombre}}</a>
                                    <div id="accordion{{$receta->id}}" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-around mb-1">
                                                <div class="h6">Ingrediente: </div>
                                                <div class="h6">cantidad:</div>
                                            </div>
                                            @foreach ($receta->RecetaIngredientes as $item => $value)
                                                <div class="d-flex justify-content-around">
                                                </div>
                                                <div class="d-flex justify-content-around">
                                                    <div>{{$value->Ingrediente->nombre}}:</div>
                                                    <span>{{$value->cantidad}}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
