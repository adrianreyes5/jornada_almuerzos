@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-4">
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
                                    <td class="d-none d-md-table-cell">{{$ingrediente->cantidad}}</td>                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
