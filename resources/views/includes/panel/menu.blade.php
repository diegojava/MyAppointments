<h6 class="navbar-heading text-muted">Gestionar Datos</h6>
<ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/inicio">
              <i class="ni ni-tv-2 text-primary"></i> Panel de Control
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/especialidades">
              <i class="ni ni-planet text-blue"></i> Especialidades
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/doctores">
              <i class="ni ni-single-02 text-orange"></i> Medicos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pacientes">
              <i class="ni ni-satisfied text-yellow"></i> Pacientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
              <i class="ni ni-key-25 text-info"></i> Cerrar sesion
            </a>
            <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
            @csrf
            </form>
          </li>
         
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Reportes</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Frecuencia de citas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Medicos mas activos
            </a>
          </li>
         
        </ul>