@extends('layouts.base')
@section('content')
@section('title', 'Clientes')
<div class="container-fluid">
    <div class="md-center justify-content mb-8">
        <h1 class="h5 mb-2 text-gray-900">Clientes</h1>
    </div>
</div>

<div class="form-group">
    <button type="button" class="btn btn-primary split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        <span class="text">Agregar Cliente</span>
    </button>

</div>

<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Identificacion</th>
          <th scope="col">Direccion</th>
          <th scope="col">Email</th>
          <th scope="col">Telefono</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
    </thead>
    <tbody>

        <?php $num = 0; ?>
        @foreach ($customers as $customer)
        <?php $num++; ?>
      <tr>
        <th scope="row">{{ $customer->id }}</th>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->lastname }}</td>
        <td>{{ $customer->identification_nit }}</td>
        <td>{{ $customer->address }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->telephone }}</td>
        <td>{{ $customer->description }}</td>
        <td>
        <button type="button" rel="tooltip" class="btn btn-info">
            <i class="material-icons">ver</i>
        </button>

        <button type="button" rel="tooltip" class="btn btn-success">
            <i class="material-icons">editar</i>
        </button>
        <button type="button" rel="tooltip" class="btn btn-danger">
            <i class="material-icons">eliminar</i>
        </button>
     </td>
    </tr>
     @include('customers.create')
     {{--   @include('categories.edit')
       @include('categories.delete') --}}

    </tbody>
    @endforeach

  </table>

  @endsection



