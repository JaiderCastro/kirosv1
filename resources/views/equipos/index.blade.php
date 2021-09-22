@extends('layouts.base')
@section('content')

@section('title', 'Equipos')

<div class="form-group">
    <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#exampleModal">
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
                    <th>PRECIO</th>
                    <th>FOTO</th>
                    <th>STOCK</th>
                    <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>


                </tbody>
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
