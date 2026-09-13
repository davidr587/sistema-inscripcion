<?PHP 
  error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
  date_default_timezone_set("America/Caracas");
  /*session_start();
  if (!isset($_SESSION['user_email'])) {
      header('Location: login.php');
  }
  */
    include('conexion.php');

    $boton=$_GET["boton"];
    $cedulaEst =$_GET["cedulaEst"];
    $nombreApellidoEst = $_GET["nombreApellidoEst"];
    $nacionalidaEst =$_GET["nacionalidaEst"];
    $lugarNacEst=$_GET["lugarNacEst"];
    $fechaNacEst =$_GET["fechaNacEst"];
    $edadEst =$_GET["edadEst"];
    $municipioEst=$_GET["municipioEst"];
    $parroquiaEst =$_GET["parroquiaEst"];
    $direcciónEst = $_GET["direcciónEst"];  
    $telefonoEst=$_GET["telefonoEst"];
    $celularEst =$_GET["celularEst"];
    $whatsappEst = $_GET["whatsappEst"];
    $emailEst=$_GET["emailEst"];
    $estaturaEst =$_GET["estaturaEst"];
    $pesoEst = $_GET["pesoEst"];  
    $camisaEst=$_GET["camisaEst"];
    $pantalonEst =$_GET["pantalonEst"];
    $calzadoEst = $_GET["calzadoEst"];

    
    if($boton=="Siguiente"){
      $consulta="INSERT INTO estudiante (cedulaEst, nombreApellidoEst, nacionalidaEst, lugarNacEst, fechaNacEst, edadEst, municipioEst, parroquiaEst, direcciónEst, telefonoEst, celularEst, whatsappEst, emailEst, estaturaEst, pesoEst, camisaEst, pantalonEst, calzadoEst) 
        VALUES ('$cedulaEst', '$nombreApellidoEst', '$nacionalidaEst', '$lugarNacEst', '$fechaNacEst', '$edadEst', '$municipioEst', '$parroquiaEst', '$direcciónEst', '$telefonoEst', '$celularEst', '$whatsappEst', '$emailEst', '$estaturaEst', '$pesoEst', '$camisaEst', '$pantalonEst', '$calzadoEst')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
          echo '<script>setTimeout(function(){swal({title:"Registro Exito!!!",text:"Estudiante Almacenado",type:"success"},
          function(isConfirm){location.href="estudiantes.php";});}, 100);</script>';

          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="estudiantes.php";});}, 100);</script>';
          }
    }


   ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
  Escuela Tecnica
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/sweetalert.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <style>
        .navbar-vertical.navbar-expand-xs .navbar-collapse {
            display: block;
            overflow: auto;
            height: calc(100vh - 145px);
        }     
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
<?php include("nav.php"); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include("header.php"); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header pb-0">
            <h6>Registro de Estudiantes</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>Estudiante
                  </p> 
            <form role="form" class="text-start" method="get">
            <div class="row">
                
                <div class="col-lg-4 col-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="cedulaEst" placeholder="Cedula del Estudiante" value="<?PHP echo $cedulaEst; ?>">
                    </div>
                </div>
                <div class="col-lg-8 col-8">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="nombreApellidoEst" placeholder="Nombre y Apellido del Estudiante">
                    </div>
                </div>
            </div>    
            <div class="row">
              <div class="col-lg-3 col-3">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="nacionalidaEst" placeholder="Nacionalidad">
                    </div>
                </div> 
              <div class="col-lg-3 col-3">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="lugarNacEst" placeholder="Lugar Nacimiento">
                    </div>
                </div> 
              <div class="col-lg-3 col-3">
                    <div class="input-group input-group-outline my-3">
                        <input type="date" class="form-control" name="fechaNacEst" placeholder="Fecha Nacimiento">
                    </div>
                </div> 
              <div class="col-lg-3 col-3">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="edadEst" placeholder="Edad">
                    </div>
                </div> 
            </div>  
            <div class="row">
              <div class="col-lg-6 col-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="municipioEst" placeholder="Municipio">
                    </div>
                </div> 
                <div class="col-lg-6 col-6">
                    <div class="input-group input-group-outline my-3">
                    <input type="text" class="form-control" name="parroquiaEst" placeholder="Parroquia">
                    </div>
                </div> 
            </div>  
            <div class="row">
              <div class="col-lg-12 col-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="direcciónEst" placeholder="Dirección de Vivienda">
                    </div>
                </div> 
            </div>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="telefonoEst" placeholder="Telefono">
                    </div>
                </div> 
              <div class="col-lg-4 col-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="celularEst" placeholder="Celular">
                    </div>
                </div> 
              <div class="col-lg-4 col-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="whatsappEst" placeholder="Telefono con Whatsapp">
                    </div>
                </div> 
            </div> 
            <div class="row">
              <div class="col-lg-12 col-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="email" class="form-control" name="emailEst" placeholder="Email">
                    </div>
                </div> 
            </div>  
            <div class="row">
              <div class="col-lg-3 col-3">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="estaturaEst" placeholder="Estatura">
                    </div>
                </div> 
              <div class="col-lg-3 col-3">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="pesoEst" placeholder="Peso">
                    </div>
                </div> 
              <div class="col-lg-2 col-2">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="camisaEst" placeholder="Talla de Camisa">
                    </div>
                </div> 
              <div class="col-lg-2 col-2">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="pantalonEst" placeholder="Talla de Pantalon">
                    </div>
                </div> 
              <div class="col-lg-2 col-2">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="calzadoEst" placeholder="Talla de Calzado">
                    </div>
                </div> 
            </div>  
            
           <div class="text-center">
            <div class="row">
                  <div class="col-lg-4 col-6">
                    <input type="submit" value="Siguiente" name="boton" class="btn bg-gradient-primary w-100">
                  </div>
                  <div class="col-lg-4 col-6">
                    <a href="listado_personal.php" class="btn bg-gradient-primary w-100">Ver Listado de Estudiantes</a>
                  </div>
                  <div class="col-lg-4 col-6">
                    <a href="mficha.php" class="btn bg-gradient-primary w-100">Regresar</a>
                  </div>
              </div>
            </div>  
            </form>                 
            </div>     
        </div>
      </div>
      <?php include("footer.php"); ?>
    </div>
  </main>
  <?php include("settings.php"); ?>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/sweetalert.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>