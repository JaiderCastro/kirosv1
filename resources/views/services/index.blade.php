@extends('layouts.base')
@section('content')

@section('title', 'Equipos')

<div class="container-fluid">
    <div class="md-center justify-content mb-8">
        <h1 class="h5 mb-2 text-gray-900">Servicios</h1>
    </div>
</div>

<div class="form-group">
    <button type="button" class="btn btn-primary split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        <span class="text">Agregar Servicio</span>
    </button>

</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Equipo</th>
                    <th>Cliente</th>
                    <th>Usuario</th>
                    <th>Tipo De Servicio</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Fecha De Entrada</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>

                    <?php $num = 0; ?>
                    @foreach ($services as $service)
                    <?php $num++; ?>





                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->equipment_id }}</td>
                        <td>{{ $service->customer_id }}</td>
                        <td>{{ $service->user_id }}</td>
                        <td>{{ $service->type_service }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->state }}</td>
                        <td>{{ $service->date_entry }}</td>

                        <td>
                            <button type="button" class="btn btn-success btn-circle" data-toggle="modal" data-target="#editar<?=$num?>">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#eliminar">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>


                    </tr>


                     @include('services.createmod')
                     @include('services.edit')
                   {{--   @include('categories.edit')
                     @include('categories.delete') --}}
                </tbody>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection

{{-- @section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if (session('mensaje'))
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ session('mensaje') }}',
            showConfirmButton: false,
            timer: 1500
        })
        @endif
    </script>
@endsection --}}
