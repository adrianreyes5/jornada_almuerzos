@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header card-header bg-dark">
                    <span class="text-white h5"><i class="fas fa-align-justify"></i> Recetas</span>
                </div>
                @foreach ($recetas as $receta)
                    <div class="accordion" id="accordionExample">
                        <div class="card" style="margin-bottom: 0">
                            <div class="card-header bg-dark" id="headingOne" style="cursor:pointer" data-toggle="collapse" data-target="#{{$receta->id}}" aria-expanded="false" aria-controls="collapseOne">
                                <h2 class="mb-0">
                                <button class="btn btn-link" >
                                    <span class="text-white" style="text-decoration:none"><i class="fas fa-angle-down"></i> {{ $receta->nombre }}</span>
                                </button>
                                </h2>
                            </div>

                            <div id="{{$receta->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body bg-gray-100">
                                    <span>Ingredientes: </span>
                                    <ul>
                                        @foreach ($receta->Receta_Ingredientes as $item)
                                            <li>{{ $item->Ingrediente->nombre }}: {{ $item->cantidad_ing }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
