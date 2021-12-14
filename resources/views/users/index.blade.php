@extends('layouts.base')
@section('content')

<div class="container-fluid">
    <div class="md-center justify-content mb-8">
        <h1 class="h5 mb-2 text-gray-900">Usuarios</h1>
    </div>
</div>
@section('title', 'Usuarios')


<div class="form-group">
    <button type="button" class="btn btn-primary split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        <span class="text">Agregar Usuario</span>
    </button>

</div>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col"># ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Numero De Identificacion</th>
        <th scope="col">Tipo De Usuario</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>

        <?php $num = 0; ?>
        @foreach ($users as $user)
        <?php $num++; ?>


      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{  $user->name }}</td>
        <td>{{  $user->docnumber }}</td>
        <td>{{  $user->type_user}}</td>
        <td>{{  $user->email }}</td>

      <td>
        <button type="button" class="btn btn-success btn-circle" data-toggle="modal" data-target="#editar">
            <i class="fa fa-edit"></i>
        </button>
        <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#eliminar">
            <i class="fa fa-trash"></i>
        </button>
      </td>
    </tr>
     @include('users.create')
    </tbody>
     @endforeach
  </table>



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




