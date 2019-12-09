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
                    <div class="card-title d-flex justify-content-between">
                        <h6 class="mt-2">Recetas con ingredientes</h6>
                        <a href="#" class="btn btn-sm btn-info" id="cambiarCant"><i class="fas fa-sync-alt" id="icon"></i><strong> Cambiar cantidad</strong> </a>
                    </div>
                    @foreach ($recetas as $receta)
                        <div id="accordion">
                            <div class="card mb-2">
                                <div class="card-header">
                                    <a href="#accordion{{$receta->id}}" class="text-body collapsed h6" data-toggle="collapse" aria-expanded="
                                    ">{{$receta->nombre}}</a>
                                    <div id="accordion{{$receta->id}}" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row mb-1">
                                                <h6 class="col-6 text-center">Ingrediente </h6>
                                                <h6 class="col-6 text-center">cantidad</h6>
                                            </div>
                                            @foreach ($receta->RecetaIngredientes as $item => $value)
                                                <div class="row">
                                                    <div class="col-6 text-center">
                                                        <span>{{$value->Ingrediente->nombre}}:</span>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <span class="remove-text-green" id="{{$value->id}}">{{$value->cantidad}}</span>
                                                    </div>
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
{{-- @parent --}}
    <script>
        $(document).ready(function() {
            var array;
            var cantidad = [];

            $("#cambiarCant").on("click", function() {
                $("#icon").addClass("rotate");

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.ajax({
                    method: "GET",
                    url: '{{route("ingredienteReceta.cambiar")}}',
                    dataType: 'json',
                    cache: false,
                    success: function(data) {                        
                        array = data.data;
                        for( i in array) {
                            cantidad = array[i];
                            
                            $(`#${i}`).html(cantidad);
                            $(`#${i}`).removeClass("remove-text-success");
                            $(`#${i}`).addClass("text-green");
                        }
                        setTimeout(function() {
                            for( i in array) {
                                $(`#${i}`).addClass("remove-text-success");
                            }
                        }, 1000);
                        $("#icon").removeClass("rotate");
                    },
                    error: function(error) {
                        error.log(error);
                    }
                })
            })
        })
    </script>
@endsection
