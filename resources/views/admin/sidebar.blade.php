
<div class="sidebar">
    <ul>
          <!-- Divider -->
    <hr class="sidebar-divider my-0">
      <li><a href="/dashboard" class="active">
        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
        <span class="title">Dashboard</span></a></li>
          <!-- Divider -->
    <hr class="sidebar-divider my-0">
      <li><a href="{{ route('equipments.index') }}">
        <span class="icon"><i class="fas fa-fw fa-table"></i></span>
        <span class="title">Equipos</span>
        </a></li>
      <li><a href="{{ route('services.index') }}">
        <span class="icon"><i class="fab fa-servicestack"></i></span>
        <span class="title">Servicios</span>
        </a></li>
      <li><a href="{{ route('categories.index') }}" class="">
        <span class="icon"><i class="fa fa-cubes"></i></span>
        <span class="title">Categorias</span>
        </a></li>
      <li><a href="{{ route('customers.index') }}">
        <span class="icon"><i class="fas fa-address-card"></i></span>
        <span class="title">Clientes</span>
        </a></li>

        <li><a href="{{ route('users.index') }}">
            <span class="icon"><i class="fas fa-users"></i></span>
            <span class="title">Usuarios</span>
            </a></li>
  </ul>
</div>
