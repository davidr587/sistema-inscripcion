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
        .bg-gradient-primary {
            background-image: linear-gradient(195deg, #49a3f1 0%, #1a73e8 100%) !important;
        }  
        .form-control {
            border: 1px solid #d2d6da !important;
            padding-left: 10px;
        }
        label.etiquetastec {
            font-size: 12px;
            color: #098fab;
        }        
  </style>
</head>
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
          echo "<script>window.location='representante.php?cedEst=$cedulaEst'</script>";

          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="estudiantes.php";});}, 100);</script>';
          }
    }


   ?> 
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
                    <label class="etiquetastec">Cedula del Estudiante</label>
                        <input type="text" class="form-control" name="cedulaEst" placeholder="Cedula del Estudiante" value="<?PHP echo $cedulaEst; ?>">
                
                </div>
                <div class="col-lg-8 col-8">
                    <label class="etiquetastec">Nombre y Apellido del Estudiante</label>
                        <input type="text" class="form-control" name="nombreApellidoEst" placeholder="Nombre y Apellido del Estudiante" onkeypress="return soloLetras(event)" required>
                    
                </div>
            </div>    
            <br>
            <div class="row">
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Nacionalidad</label>
                        <input type="text" class="form-control" name="nacionalidaEst" placeholder="Nacionalidad"onkeypress="return soloLetras(event)" required>
                  
                </div> 
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Lugar Nacimiento</label>
                        <input type="text" class="form-control" name="lugarNacEst" placeholder="Lugar Nacimiento" required>
                   
                </div> 
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Fecha Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNacEst" placeholder="Fecha Nacimiento" required>
                    
                </div> 
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Edad</label>
                        <input type="text" class="form-control" name="edadEst" placeholder="Edad" onkeypress="return soloNumeros(event)" required>
                    
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Municipio</label>
                        <input type="text" class="form-control" name="municipioEst" placeholder="Municipio" onkeypress="return soloLetras(event)" required>
                    
                </div> 
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Parroquia</label>
                    <input type="text" class="form-control" name="parroquiaEst" placeholder="Parroquia" onkeypress="return soloLetras(event)" required>
                   
                </div> 
            </div> 
            <br> 
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección de Vivienda</label>
                        <input type="text" class="form-control" name="direcciónEst" placeholder="Dirección de Vivienda" required>
                   
                </div> 
            </div>
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Telefono</label>
                        <input type="text" class="form-control" name="telefonoEst" placeholder="Telefono" required>
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Celular</label>
                        <input type="text" class="form-control" name="celularEst" placeholder="Celular" required>
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Telefono con Whatsapp</label>
                        <input type="text" class="form-control" name="whatsappEst" placeholder="Telefono con Whatsapp">
                    </div>
                
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Email</label>
                        <input type="email" class="form-control" name="emailEst" placeholder="Email" required>
                    </div>
               
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Estatura</label>
                        <input type="text" class="form-control" name="estaturaEst" placeholder="Estatura" required>
                   
                </div> 
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Peso</label>
                        <input type="text" class="form-control" name="pesoEst" placeholder="Peso" required>
                   
                </div> 
              <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Talla de Camisa</label>
                        <input type="text" class="form-control" name="camisaEst" placeholder="Talla de Camisa" required>
                  
                </div> 
              <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Talla de Pantalon</label>
                        <input type="text" class="form-control" name="pantalonEst" placeholder="Talla de Pantalon" required>
                   
                </div> 
              <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Talla de Calzado</label>
                        <input type="text" class="form-control" name="calzadoEst" placeholder="Talla de Calzado" required>
                  
                </div> 
            </div>  
            <br>
           <div class="text-center">
            <div class="row">
                  <div class="col-lg-6 col-6">
                    <input type="submit" value="Siguiente" name="boton" class="btn bg-gradient-primary w-100">
                  </div>
                  <div class="col-lg-6 col-6">
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
   <script type="text/javascript">
    function soloLetras(e){
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = "8-37-39-46";

            tecla_especial = false
            for(var i in especiales){
                        if(key == especiales[i]){
                                tecla_especial = true;
                                break;
                        }
                }

                if(letras.indexOf(tecla)==-1 && !tecla_especial){
                        return false;
                }
            }
    function soloNumeros(e){
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " 0123456789";
            especiales = "8-37-39-46";

            tecla_especial = false
            for(var i in especiales){
                        if(key == especiales[i]){
                                tecla_especial = true;
                                break;
                        }
                }

                if(letras.indexOf(tecla)==-1 && !tecla_especial){
                        return false;
                }
            }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>