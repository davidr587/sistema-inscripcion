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
    $cedEst = $_GET["cedEst"];
    $tipozona =$_GET["tipozona"];
    $tipocasa =$_GET["tipocasa"];
    $condición=$_GET["condición"];
    $tenencia =$_GET["tenencia"];
    $monto =$_GET["monto"];
    $condicionhab=$_GET["condicionhab"];
    $condicionbah =$_GET["condicionbah"];
    $condicioncac = $_GET["condicioncac"];  
    $condicioncom=$_GET["condicioncom"];
    $condiciongar =$_GET["condiciongar"];
    $condicionser = $_GET["condicionser"];
    $condicionjat=$_GET["condicionjat"];
    $Servicios =$_GET["Servicios"];


    

    if($boton=="Siguiente"){
      $consulta="INSERT INTO vivienda 
        (cedEst, tipozona, tipocasa, condición, tenencia, monto, condicionhab, condicionbah, condicioncac, condicioncom, condiciongar, condicionser, condicionjat, Servicios) 
        VALUES 
        ('$cedEst', '$tipozona', '$tipocasa', '$condición', '$tenencia', '$monto', '$condicionhab', '$condicionbah', '$condicioncac', '$condicioncom', '$condiciongar', '$condicionser', '$condicionjat', '$Servicios')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
          echo "<script>window.location='datosacademicos.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="vivienda.php";});}, 100);</script>';
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
            <h6>Registro de Vivienda</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>de Vivienda
                  </p> 
            <form role="form" class="text-start" method="get">
            <div class="row">   
                <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Cedula del Estudiante</label>
                         <input type="text" class="form-control" name="cedEst" placeholder="Cedula del Estudiante" value="<?PHP echo $cedEst; ?>">
                    
                </div>
            </div> 
            <br>
            <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Zona de la Vivienda</label>
                        <select name="tipozona" id="" class="form-control">
                            <option value="S">Zona de la Vivienda</option>
                            <option value="Urbana">Urbana</option>
                            <option value="Rural">Rural</option>
                            <option value="Barrio">Barrio</option>
                        </select>
                   
                </div>
   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Tipo de vivienda</label>
                        <select name="tipocasa" id="" class="form-control">
                            <option value="S">Tipo de vivienda</option>
                            <option value="Casa">Casa</option>
                            <option value="Rancho">Rancho</option>
                            <option value="Quinta">Quinta</option>
                            <option value="Vecindad">Vecindad</option>
                            <option value="Habitación">Habitación</option>
                            <option value="Finca">Finca</option>
                        </select>
                  
                </div>
            </div>    
            <br>
            <div class="row">   
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Condición de la infraestructura</label>
                        <select name="condición" id="" class="form-control">
                            <option value="S">Condición de la infraestructura</option>
                            <option value="Muy buena">Muy buena</option>
                            <option value="Buena">Buena</option>
                            <option value="Regular">Regular</option>
                            <option value="Mala">Mala</option>
                            <option value=" Muy mala"> Muy mala</option>
                        </select>
                
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Tenencia de la vivienda</label>
                          <select name="tenencia" id="" class="form-control">
                            <option value="S">Tenencia de la vivienda</option>
                            <option value="Propia">Propia</option>
                            <option value="Prestada">Prestada</option>
                            <option value="Arrimada">Arrimada</option>
                            <option value="Alquilada">Alquilada</option>

                        </select>
                   
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Monto</label>
                           <input type="text" class="form-control" name="monto" placeholder="Monto">
                    </div>
                
            </div> 
            <br>
            <div class="row">   
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Nº de habitaciones</label>
                        <input type="text" class="form-control" name="condicionhab" placeholder="Nº de habitaciones" onkeypress="return soloNumeros(event)">
                    
                </div>
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Nº de baños</label>
                        <input type="text" class="form-control" name="condicionbah" placeholder="Nº de baños" onkeypress="return soloNumeros(event)">
               
                </div>   
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Cocina</label>
                        <input type="text" class="form-control" name="condicioncac" placeholder="Cocina" onkeypress="return soloNumeros(event)">
                    
                </div>
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Comedor</label>
                        <input type="text" class="form-control" name="condicioncom" placeholder="Comedor" onkeypress="return soloNumeros(event)">
                  
                </div>
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Garaje</label>
                        <input type="text" class="form-control" name="condiciongar" placeholder="Garaje" onkeypress="return soloNumeros(event)">
                    
                </div>
                <div class="col-lg-1 col-1">
                    <label class="etiquetastec">Área</label>
                        <input type="text" class="form-control" name="condicionser" placeholder="Área de servicio">
                    
                </div>
                <div class="col-lg-1 col-1">
                    <label class="etiquetastec">Jardín</label>
                        <input type="text" class="form-control" name="condicionjat" placeholder="Jardín">
                   
                </div>      
            </div>
            <br>
           <div class="row">   
                <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Servicios</label>
                        <select name="Servicios" id="" class="form-control">
                            <option value="S">Servicios</option>
                            <option value="Luz">Luz</option>
                            <option value="Agua potable">Agua potable</option>
                            <option value="Aseo urbano">Aseo urbano</option>
                            <option value="Gas">Gas</option>
                            <option value="Tlf. Residencial">Tlf. Residencial</option>
                            <option value="Internet">Internet</option>
                            <option value="Tv Cable">Tv Cable</option>
                        </select>
             
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
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>