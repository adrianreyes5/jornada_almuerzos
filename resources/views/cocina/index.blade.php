@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row d-flex justify-content-around">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-dark">
                    <a href="{{ route('cocina.create') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i><strong> Pedir Orden</strong> </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-centered mb-0">
                            <thead class="">
                                <th>Orden</th>
                                <th>Receta</th>
                                <th class="d-none d-md-table-cell">Fecha</th>
                                <th>Estado de entrega</th>
                            </thead>

                            @if ($ordenes->isEmpty())
                                <tbody>
                                    <td>No hay ordenes</td>
                                </tbody>
                            @endif

                            @foreach ($ordenes as $key)
                                <tbody>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->Receta->nombre}}</td>
                                    <td class="d-none d-md-table-cell">{{$key->fecha}}</td>
                                    <td class="{{ $key->estado_entrega === 'Entregado' ? 'badge badge-success-lighten ml-4 my-1' : 'badge badge-danger ml-4 my-1' }}">
                                        <span class="{{ $key->estado_entrega === 'En espera' ? 'spinner-border' : null }}" style="width: 0.8rem; height: 0.8rem;" role="status" aria-hidden="true"></span>
                                        <span>@if ($key->estado_entrega === 'Entregado')
                                            <i class="fas fa-check"></i>
                                        @endif{{$key->estado_entrega}}</span>
                                    </td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center justify-content-md-end bg-dark">
                    <div class="text-dark">
                        {{ $ordenes->onEachSide(1)->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-dark">
                    <span class="text-white h5">Ingredientes</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Cantidad Disponible</th>
                            </thead>

                            @if ($ingredientes->isEmpty())
                                <tbody>
                                    <td>No hay Ingredientes</td>
                                </tbody>
                            @endif
                            @foreach ($ingredientes as $key)
                                <tbody>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->nombre}}</td>
                                    <td class="text-center text-sm-left">{{$key->cantidad}}</td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-cyan">
                    <i class="fas fa-align-justify"></i>
                    <span class="text-white h6">Historial de Compras</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <table class="table table-responsive-sm">
                            <thead>
                                <th>#Compra</th>
                                <th>Ingrediente</th>
                                <th>orden</th>
                                <th>cantidad</th>
                                <th>fecha</th>
                            </thead>
                            @foreach ($compras as $key)
                                <tbody>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->Ingrediente->nombre}}</td>
                                    <td>{{$key->orden_id}}</td>
                                    <td>{{$key->cantidad}}</td>
                                    <td>{{$key->fecha}}</td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <div>
                        {{ $compras->links() }}
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
