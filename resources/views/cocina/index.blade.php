@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row d-flex justify-content-around">
        <div class="col-lg-10">
            <div class="card border-top-info">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <h6 class="mt-2">Ordenes</h6>
                        <a href="{{route('ordenes.create')}}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i><strong> Pedir Orden</strong> </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless table-sm tx-nowrap">
                            <thead class="border-bottom">
                                <th>#</th>
                                <th>Receta</th>
                                <th class="d-none d-md-table-cell">Fecha</th>
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
                                    @if (Auth::user()->name === $orden->user->name)
                                        <td>{{$orden->id}}</td>
                                        <td>{{$orden->Receta->nombre}}</td>
                                        <td class="d-none d-md-table-cell">{{$orden->fecha}}</td>
                                        <td class="{{ $orden->estado_entrega === 1 ? 'badge badge-success-lighten ml-4 my-1' : 'badge badge-danger ml-4 my-1' }}">
                                                <span>
                                                    @if ($orden->estado_entrega === 1)
                                                        <i class="fas fa-check"></i>
                                                        @else 
                                                        <i class="fas fa-sync-alt rotate"></i>
                                                        @endif
                                                        {{$orden->estado_entrega ? "Entregado" : "En espera"}}
                                                    </span>
                                        </td>
                                        <td>{{$orden->user->name}}</td>
                                    @endif
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
    </div>
</div>
@endsection
@section('scripts')

    {{-- <script>
        $(document).ready(function() {
            $("#crearOrden").on("click", function() {
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.ajax({
                    method: "GET",
                    url: "{{ route('ordenes.create') }}",
                    dataType: "json",
                    cache: false,
                    success: function(data) {
                        console.log(data);
                    },  
                    error: function(error) {
                        console.error(error);
                    }
                });
            })
        })
    </script> --}}

@endsection
