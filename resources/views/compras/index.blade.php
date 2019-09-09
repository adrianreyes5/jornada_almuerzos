@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-dark">
                    <div class="h5 text-white"><i class="far fa-credit-card"></i> Compras</div>
                </div>
                <div class="card-body">
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
                                    <td  class="d-none d-md-block">{{$key->fecha}}</td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center justify-content-md-end bg-dark">
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
