<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Usuarios</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <a class="nav-link" href="/usuarios">Gestionar Usuarios</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Reclutamiento</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <a class="nav-link" href="/empleados">Gestionar Empleados</a>
                <a class="nav-link" href="/postulantes">Gestionar Postulantes</a>
                <a class="nav-link" href="/cargos">Gestionar Cargos</a>
                <a class="nav-link" href="#">Gestionar Entrevista</a>
                <a class="nav-link" href="#">Gestionar Evaluacion</a>
                <a class="nav-link" href="#">Gestionar Preguntas</a>
                <a class="nav-link" href="#">Gestionar Respuestas</a>
            </div>
          </li>
          {{--<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Planilla</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <a class="nav-link" href="#">Gestionar Planilla</a>
                <a class="nav-link" href="#">Gestionar Sueldos</a>
                <a class="nav-link" href="#">Gestionar Descuentos</a>
            </div>
          </li>--}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Departamentos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <a class="nav-link" href="/departamentos">Gestionar Departamento</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Horarios</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <a class="nav-link" href="#">Gestionar Horario</a>
                <a class="nav-link" href="#">Gestionar Puntualidad</a>
                <a class="nav-link" href="#">Gestionar Horas Extras</a>
            </div>
          </li>
     </ul>
</nav>
