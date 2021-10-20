@extends('layouts.base')
@section('content')

@section('title', 'Categorias')

<div class="form-group">
    <button type="button" class="btn btn-primary split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        <span class="text">Añadir Categoria</span>
    </button>

</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                <tr>
                    <th>N°</th>
                    <th>CATEGORIA</th>
                    <th>DESCRIPCION</th>
                    <th>ACCIONES  </th>
                </tr>
                </thead>

                <tbody>
                    <?php $num = 0; ?>
                    @foreach ($categories as $category)
                    <?php $num++; ?>

                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-circle" data-toggle="modal" data-target="#editar<?=$num?>">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#eliminar<?=$num?>">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>


                    </tr>


                     @include('categories.createmod')
                     @include('categories.edit')
                     @include('categories.delete')
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
