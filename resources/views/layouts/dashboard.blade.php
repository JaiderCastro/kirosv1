@extends('layouts.base')
@section('content')

@section('Dashboard', 'Dashboard')

<div class="form-group">
    <h1 class="h3 mb-0 text-primary-800">Dashboard</h1>
    <span>Panel de control</span></a>
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
