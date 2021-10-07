@extends('layouts.base')
@section('content')

@section('title', 'Equipos')

<div class="form-group">
    <button type="button" class="btn btn-primary split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        <span class="text">Agregar Equipo</span>
    </button>

</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                <tr>
                    <th>N°</th>
                    <th>NOMBRE DEL EQUIPO</th>
                    <th>MODELO</th>
                    <th>MARCA</th>
                    <th>CATEGORIA</th>
                    <th>DETALLE</th>
                    <th>FECHA DE CREACION</th>
                    <th>STOCK</th>
                    <th>ACCIONES</th>
                </tr>
                </thead>

                <tbody>
                    <?php $num = 0; ?>
                    @foreach ($equipments as $equipment)
                    <?php $num++; ?>

                    <tr>
                        <td>{{ $equipment->id }}</td>
                        <td>{{ $equipment->equipment }}</td>
                        <td>{{ $equipment->model }}</td>
                        <td>{{ $equipment->brand }}</td>
                        <td>{{ $equipment->category_id }}</td>
                        <td>{{ $equipment->detail }}</td>
                        <td>{{ $equipment->created_at}}</td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-success btn-circle" data-toggle="modal" data-target="#editar<?=$num?>">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#eliminar">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>



                    @include('equipments.createmod')
                    @include('equipments.edit')
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
