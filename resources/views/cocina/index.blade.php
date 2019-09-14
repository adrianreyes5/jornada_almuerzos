@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row d-flex justify-content-around">
        <div class="col-lg-6">
            <div class="card border-top-info">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <h6 class="mt-2">Ordenes</h6>
                        <a href="{{ route('ordenes.create') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i><strong> Pedir Orden</strong> </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless table-sm tx-nowrap">
                            <thead class="border-bottom">
                                <th>#</th>
                                <th>Receta</th>
                                <th class="">Fecha</th>
                                <th>Estado de entrega</th>
                                <th>Usuario</th>
                            </thead>

                            @if ($ordenes->isEmpty())
                                <tbody>
                                    <td>No hay ordenes</td>
                                </tbody>
                            @endif

                            @foreach ($ordenes as $orden)
                                <tbody class="">
                                    <td>{{$orden->id}}</td>
                                    <td>{{$orden->Receta->nombre}}</td>
                                    <td class="d-none d-md-table-cell">{{$orden->fecha}}</td>
                                    <td class="{{ $orden->estado_entrega === 1 ? 'badge badge-success-lighten ml-4 my-1' : 'badge badge-danger ml-4 my-1' }}">
                                        <span class="{{ $orden->estado_entrega === 2 ? 'spinner-border' : null }}" style="width: 0.8rem; height: 0.8rem;" role="status" aria-hidden="true"></span>
                                            <span>
                                                @if ($orden->estado_entrega === 1)
                                                <i class="fas fa-check"></i>
                                            @endif
                                            {{$orden->estado_entrega ? "Entregado" : "En espera"}}
                                        </span>
                                    </td>
                                    <td>{{$orden->user_id}}</td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center justify-content-md-end">
                    <div class="text-dark">
                        {{ $ordenes->links() }}
                    </div>
                </div>
            </div>
        </div>
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
                                <th>cantidad</th>
                            </thead>

                            @if ($ingredientes->isEmpty())
                                <tbody>
                                    <td>No hay Ingredientes</td>
                                </tbody>
                            @endif

                            @foreach ($ingredientes as $ingrediente)
                                <tbody class="">
                                    <td>{{$ingrediente->id}}</td>
                                    <td>{{$ingrediente->nombre}}</td>
                                    <td>{{$ingrediente->cantidad}}</td>
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
                        <h6 class="mt-2">Compras</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless table-sm tx-nowrap">
                            <thead class="border-bottom">
                                <th>#</th>
                                <th>fecha</th>
                                <th class="">orden ID</th>
                                <th>Ingrediente ID</th>
                                <th>Cantidad</th>
                            </thead>

                            @if ($compras->isEmpty())
                                <tbody>
                                    <td>No hay ordenes</td>
                                </tbody>
                            @endif

                            @foreach ($compras as $compra)
                                <tbody class="">
                                    <td>{{$compra->id}}</td>
                                    <td>{{$compra->fecha_entrega}}</td>
                                    <td>{{$compra->orden_id}}</td>
                                    <td>{{$compra->Ingrediente->nombre}}</td>
                                    <td>{{$compra->cantidad}}</td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center justify-content-md-end">
                    <div class="text-dark">
                        {{ $compras->links() }}
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
