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
    $cedMad =$_GET["cedMad"];
    $cedEst = $_GET["cedEst"];
    $nombreApellidoMad =$_GET["nombreApellidoMad"];
    $parentescoMad=$_GET["parentescoMad"];
    $edadMad =$_GET["edadMad"];
    $lugarMad =$_GET["lugarMad"];
    $fechaMad=$_GET["fechaMad"];
    $nacionalidadMad =$_GET["nacionalidadMad"];
    $rifMad = $_GET["rifMad"];  
    $edoCivilMad=$_GET["edoCivilMad"];
    $justificativoMad =$_GET["justificativoMad"];
    $organismoMad = $_GET["organismoMad"];
    $fehaMad=$_GET["fehaMad"];
    $direccionMad =$_GET["direccionMad"];
    $municipioMad = $_GET["municipioMad"];  
    $parroquiaMad=$_GET["parroquiaMad"];
    $telefonoMad =$_GET["telefonoMad"];
    $celularMad = $_GET["celularMad"];
    $whastappMad = $_GET["whastappMad"];
    $emailMad = $_GET["emailMad"];
    $profesionMad = $_GET["profesionMad"];
    $cargoMad = $_GET["cargoMad"];
    $empresaMad = $_GET["empresaMad"];
    $direccionTrabMad = $_GET["direccionTrabMad"];
    $teleTrabMad = $_GET["teleTrabMad"];
    $horarioMad = $_GET["horarioMad"];
    $religionMad = $_GET["religionMad"];
    $tiempoMad = $_GET["tiempoMad"];


    
    if($boton=="Siguiente"){
      $consulta="INSERT INTO madre 
        (cedMad, cedEst, nombreApellidoMad, parentescoMad, edadMad, lugarMad, fechaMad, nacionalidadMad, rifMad, edoCivilMad, justificativoMad, organismoMad, fehaMad, direccionMad, municipioMad, parroquiaMad, telefonoMad, celularMad, whastappMad, emailMad, profesionMad, cargoMad, empresaMad, direccionTrabMad, teleTrabMad, horarioMad, religionMad, tiempoMad) 
        VALUES 
        ('$cedMad', '$cedEst', '$nombreApellidoMad', '$parentescoMad', '$edadMad', '$lugarMad', '$fechaMad', '$nacionalidadMad', '$rifMad', '$edoCivilMad', '$justificativoMad', '$organismoMad', '$fehaMad', '$direccionMad', '$municipioMad', '$parroquiaMad', '$telefonoMad', '$celularMad', '$whastappMad', '$emailMad', '$profesionMad', '$cargoMad', '$empresaMad', '$direccionTrabMad', '$teleTrabMad', '$horarioMad', '$religionMad', '$tiempoMad')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
           echo "<script>window.location='padre.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="madre.php";});}, 100);</script>';
          }
    }
    if($boton=="Buscar"){
     $strQuery1= "SELECT * FROM madre WHERE cedMad ='$cedMad'";
     $strResultado1 = $obj_conexion->query($strQuery1);
     $strDatos1 = mysqli_fetch_array($strResultado1);
       $nombreApellidoMad  = $strDatos1['nombreApellidoMad'];
       $parentescoMad  = $strDatos1['parentescoMad'];
       $edadMad  = $strDatos1['edadMad'];
       $lugarMad  = $strDatos1['lugarMad'];
       $fechaMad  = $strDatos1['fechaMad'];
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
            <h6>Registro de Madre</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>de Madre
                  </p> 
            <form role="form" class="text-start" method="get">
             <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Cedula del Estudiante</label>
                         <input type="text" class="form-control" name="cedEst" placeholder="Cedula del Estudiante" value="<?PHP echo $cedEst; ?>">
                   
                </div>
            </div>    
            <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Cedula del Madre</label>
                       <input type="text" class="form-control" name="cedMad" placeholder="Cedula del Madre" value="<?php echo $cedMad; ?>">
                   
                </div>
                 <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Buscar si ya Existe</label>
                       <input type="submit" value="Buscar" name="boton" class="btn bg-gradient-primary w-100">
       
                </div>
            </div>
            <br>    
             <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Nombre y Apellido</label>
                        <input type="text" class="form-control" name="nombreApellidoMad" placeholder="Nombre y Apellido" value="<?php echo $nombreApellidoMad; ?>" onkeypress="return soloLetras(event)">
                 
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Seleccione Parentezco</label>
                        <input type="text" class="form-control" name="parentescoMad" placeholder="Madre" value="Madre" onkeypress="return soloLetras(event)">
                </div>
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Edad</label>
                        <input type="text" class="form-control" name="edadMad" placeholder="Edad" onkeypress="return soloNumeros(event)">
                    
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Lugar de Nacimiento</label>
                    <input type="text" class="form-control" name="lugarMad" placeholder="Lugar de Nacimiento" value="<?php echo $lugarMad; ?>">
                   
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Fecha de Nacimiento</label>
                    <input type="text" class="form-control" name="fechaMad" placeholder="Fecha" value="<?php echo $fechaMad; ?>">
                 
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Nacionalidad</label>
                        <select name="nacionalidadMad" id="" class="form-control">
                            <option value="S">Seleccione Nacionalidad</option>
                            <option value="Venezolano">Venezolano</option>
                            <option value="Extranjero">Extranjero</option>
                        </select>
                 
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">RIF</label>
                    <input type="text" class="form-control" name="rifMad" placeholder="Indique el RIF">
                   
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Estado Civil</label>
                    <select name="edoCivilMad" id="" class="form-control">
                            <option value="S">Seleccione Estado Civil</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Viudo">Viudo</option>
                            <option value="Divorciado">Divorciado</option>
                        </select>
                    
                </div> 
            </div>
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Justificativo legal</label>
                        <select name="justificativoMad" id="" class="form-control">
                            <option value="S">Posee justificativo legal</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Organismo</label>
                        <input type="text" class="form-control" name="organismoMad" placeholder="Organismo" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Fecha</label>
                        <input type="date" class="form-control" name="fehaMad" placeholder="Fecha">
                   
                </div> 
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección</label>
                        <input type="text" class="form-control" name="direccionMad" placeholder="Dirección">
                   
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Municipio</label>
                        <input type="text" class="form-control" name="municipioMad" placeholder="Municipio" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Parroquia</label>
                        <input type="text" class="form-control" name="parroquiaMad" placeholder="Parroquia" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Teléfono local</label>
                        <input type="text" class="form-control" name="telefonoMad" placeholder="Teléfono local">
                    
                </div>  
            </div>
            <br>  
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono celular</label>
                        <input type="text" class="form-control" name="celularMad" placeholder="Teléfono celular sencillo">
                  
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono celular con whatsapp</label>
                        <input type="text" class="form-control" name="whastappMad" placeholder="Teléfono celular con whatsapp">
                    
                </div> 
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Email</label>
                        <input type="text" class="form-control" name="emailMad" placeholder="Email">
                 
                </div> 
            </div>   
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Profesión</label>
                        <input type="text" class="form-control" name="profesionMad" placeholder="Profesión" onkeypress="return soloLetras(event)">
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Cargo</label>
                        <input type="text" class="form-control" name="cargoMad" placeholder="Cargo" onkeypress="return soloLetras(event)">
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Empresa/ Institución</label>
                        <input type="text" class="form-control" name="empresaMad" placeholder="Empresa/ Institución" onkeypress="return soloLetras(event)">
                    
                </div>  
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección del trabajo</label>
                        <input type="text" class="form-control" name="direccionTrabMad" placeholder="Dirección del trabajo">
                    
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono local del trabajo</label>
                        <input type="text" class="form-control" name="teleTrabMad" placeholder="Teléfono local del trabajo">
                    
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Horario</label>
                        <input type="text" class="form-control" name="horarioMad" placeholder="Horario">
                   
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Religión</label>
                        <input type="text" class="form-control" name="religionMad" placeholder="Religión">
                    
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Tiempo conviviendo con el menor</label>
                        <input type="text" class="form-control" name="tiempoMad" placeholder="Tiempo conviviendo con el menor">
                  
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
<!DOCTYPE html>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>