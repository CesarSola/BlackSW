
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion custom-sidebar" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
    <div>
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-2">blackSW </div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Inicio - Dropdown -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInicio" aria-expanded="true" aria-controls="collapseInicio">
      <i class='bx bxs-dashboard'></i> Inicio
    </a>
    <div id="collapseInicio" class="collapse" aria-labelledby="headingInicio" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{route('dashboard')}}">Dashboard</a>
        <a class="collapse-item" href="{{route('users.index')}}">Usuarios</a>
        <a class="collapse-item" href="{{ route('roles.index') }}" >Ver Roles</a>
        <a class="collapse-item" href="{{ route('permissions.index') }}" >Ver Permisos</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Tablas -->
  <li class="nav-item">
    <a class="nav-link " href="{{route('invernadero.index')}}">
      <i class='bx bxs-home-alt-2'></i>Invernadero
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('Cama.index')}}">
      <i class='bx bxs-bed'></i> Camas
    </a>
  </li>
  <!-- Agrega el resto de los elementos en la sección de Tablas -->
 <!-- Divider -->
 <li class="nav-item">
  <a class="nav-link " href="{{route('Sensor.index')}}">
    <i class='bx bx-station'></i>Sensores
  </a>
</li>
 <!-- Divider -->
<li class="nav-item">
  <a class="nav-link " href="{{route('Cultivo.index')}}">
    <i class='bx bxs-leaf'></i> Cultivos
  </a>
</li>
 <!-- Divider -->
<li class="nav-item">
  <a class="nav-link " href="{{route('Tipocultivo.index')}}">
    <i class='bx bx-leaf' ></i> Tipo Cultivos
  </a>
</li>
 <!-- Divider -->
<li class="nav-item">
  <a class="nav-link " href="{{route('dispositivo.index')}}">
    <i class='bx bx-desktop'></i>Dispositivo inteligente
  </a>
</li>
 <!-- Divider -->
<li class="nav-item">
  <a class="nav-link " href="{{route('estado.index')}}">
    <i class='bx bx-power-off'></i> Estados
  </a>
</li>
 <!-- Divider -->
<li class="nav-item">
  <a class="nav-link " href="{{route('tipodispositivo.index')}}">
    <i class='bx bx-desktop'></i> Tipo Dispositivo Inteligente
  </a>
</li>
 <!-- Divider -->
<li class="nav-item">
  <a class="nav-link " href="{{route('Histos_disps_intels.index')}}">
    <i class='bx bx-list-ol'></i>  Historial dispositivos inteligentes
  </a>
</li>
 <!-- Divider -->
<li class="nav-item">
  <a class="nav-link " href="{{route('tiposensor.index')}}">
    <i class='bx bx-broadcast'></i> Tipos de sensor
  </a>
</li>
<li class="nav-item">
  <a class="nav-link " href="{{route('Lecturas.index')}}">
    <i class='bx bx-bed'></i> Cultivo cama
  </a>
</li>
 <!-- Divider -->
<li class="nav-item">
  <a class="nav-link " href="{{route('camaSensor.index')}}">
    <i class='bx bx-bed' ></i>Cama sensor
</li>
 <!-- Divider -->

 <!-- Divider -->
  <!-- Divider -->
  <hr class="sidebar-divider">
</ul>
