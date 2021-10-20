@extends('layouts.base')
@section('content')

@section('title', 'Usuarios')

<div class="form-group">
    <button type="button" class="btn btn-primary split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        <span class="text">Agregar usuario</span>
    </button>

</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                <tr>
                    <th>N°ID</th>
                    <th>NOMBRE</th>
                    <th>TIPO DE USUARIO</th>
                    <th>CORREO</th>
                    <th>ACCIONES</th>
                </tr>
                </thead>

                <tbody>




                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <button type="button" class="btn btn-success btn-circle" data-toggle="modal" data-target="#editar">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#eliminar">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>


                    </tr>

                     {{--
                     @include('categories.createmod')
                     @include('categories.edit')
                     @include('categories.delete') --}}
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
