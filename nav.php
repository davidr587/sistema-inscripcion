<?PHP 
  error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
  date_default_timezone_set("America/Caracas");
  session_start();
  if (!isset($_SESSION['emailPersonal'])) {
      header('Location: login.php');
  }
  include('conexion.php');
  $meta_key = $_SESSION['meta_key'];
  $emailPersonal = $_SESSION['emailPersonal'];




?>
<style>
.navbar-vertical.navbar-expand-xs {
    background: #0084d1 !important;
 }
 a.nav-link.text-white.active.bg-gradient-primary {
    background: #f0f2f5 !important;
    color: #0084d1 !important;
}
.navbar-vertical .navbar-nav > .nav-item .nav-link.active {
    color: #0084d1 !important;
}
.sidenav .collapse .nav-item .nav-link.active {
    color: #0084d1 !important;
}
</style>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php" target="_blank">
        <img src="../assets/img/logoclacli.png" alt="" >
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Inicio</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="anoescolar.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">file_copy</i>
            </div>
            <span class="nav-link-text ms-1">Inscripción</span>
          </a>
        </li>
      <?php
        if ($_SESSION['nivelusuario']=="1")
           {
      ?>
        <li class="nav-item">
          <a class="nav-link text-white " href="personal.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_box</i>
            </div>
            <span class="nav-link-text ms-1">Personal</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="listado_secciones.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">face</i>
            </div>
            <span class="nav-link-text ms-1">Estudiantes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="seccion.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">blur_on</i>
            </div>
            <span class="nav-link-text ms-1">Seccion</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="mencion.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">bubble_chart</i>
            </div>
            <span class="nav-link-text ms-1">Mención</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="nuevoano.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">public</i>
            </div>
            <span class="nav-link-text ms-1">Años Escolares</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="estadistica_estudianes.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">graphic_eq</i>
            </div>
            <span class="nav-link-text ms-1">Estadisticas</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white " href="listado_estudiantes.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Listados</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white " href="listado_estudiantes.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Planillas</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white " href="listado_actas.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">list_alt</i>
            </div>
            <span class="nav-link-text ms-1">Actas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="bitacora.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">line_style</i>
            </div>
            <span class="nav-link-text ms-1">Bitacora</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="respaldar.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">cloud_download</i>
            </div>
            <span class="nav-link-text ms-1">Respaldar BD</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="restaurar.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">cloud_upload</i>
            </div>
            <span class="nav-link-text ms-1">Restaurar BD</span>
          </a>
        </li>
        <?php
          }
        ?>
        <li class="nav-item">
          <a class="nav-link text-white " href="logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">power_settings_new</i>
            </div>
            <span class="nav-link-text ms-1">Salir</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>