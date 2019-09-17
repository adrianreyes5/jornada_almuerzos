@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card border-top-info">
                <div class="card-body">
                    <div class="card-title">
                        <h6 class="mt-2">Compras</h6>
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <th class="d-none d-md-table-cell"># Compra</th>
                                <th>Ingrediente</th>
                                <th># Orden</th>
                                <th>Cantidad</th>
                                <th  class="d-none d-md-table-cell">Fecha</th>
                            </thead>

                            @if ($compras->isEmpty())
                                <tbody>
                                    <td>No hay compras</td>
                                </tbody>
                            @endif

                            @foreach ($compras as $key)
                                <tbody>
                                    <td class="d-none d-md-block">{{$key->id}}</td>
                                    <td>{{$key->Ingrediente->nombre}}</td>
                                    <td>{{$key->Orden->id}}</td>
                                    <td>{{$key->cantidad}}</td>
                                    <td  class="d-none d-md-block">{{$key->fecha_entrega}}</td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex  justify-content-md-end">
                    <div>
                        {{ $compras->onEachSide(1)->links() }}
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
