
    <!-- Brand Logo -->
    <a href=" {{route('inicio')}} " class="brand-link">
    
    
      <span class="brand-text font-weight-light">SystemCV</span>
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">Curriculum Vitae</a>
        </div>
      </div>


<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Páginas de inicio 
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href=" {{route('profesores.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Profesores</p>
            </a>
          </li>
          <li class="nav-item ">
            <a href=" {{route('academica.index')}} " class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Académicos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('capacitaciones.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Capacitaciones</p>
            </a>
          </li>
           <li class="nav-item">
            <a href=" {{route('disciplinas.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Disciplinas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('gestion.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Gestién Académica</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('productos.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Productos</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href=" {{route('noacademica.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Exp no Académica</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('ingenieriles.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ingenieriles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('logrosnoacademicos.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Log no Académicos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('participaciones.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Participaciones</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('aportaciones.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Aportaciones</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('premios.index')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Premios</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
    </div>