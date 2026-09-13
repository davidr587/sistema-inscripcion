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
    $cedPad =$_GET["cedPad"];
    $cedEst = $_GET["cedEst"];
    $nombreApellidoPad =$_GET["nombreApellidoPad"];
    $parentescoPad=$_GET["parentescoPad"];
    $edadPad =$_GET["edadPad"];
    $lugarPad =$_GET["lugarPad"];
    $fechaPad=$_GET["fechaPad"];
    $nacionalidadPad =$_GET["nacionalidadPad"];
    $rifPad = $_GET["rifPad"];  
    $edoCivilPad=$_GET["edoCivilPad"];
    $justificativoPad =$_GET["justificativoPad"];
    $organismoPad = $_GET["organismoPad"];
    $fehaPad=$_GET["fehaPad"];
    $direccionPad =$_GET["direccionPad"];
    $municipioPad = $_GET["municipioPad"];  
    $parroquiaPad=$_GET["parroquiaPad"];
    $telefonoPad =$_GET["telefonoPad"];
    $celularPad = $_GET["celularPad"];
    $whastappPad = $_GET["whastappPad"];
    $emailPad = $_GET["emailPad"];
    $profesionPad = $_GET["profesionPad"];
    $cargoPad = $_GET["cargoPad"];
    $empresaPad = $_GET["empresaPad"];
    $direccionTrabPad = $_GET["direccionTrabPad"];
    $teleTrabPad = $_GET["teleTrabPad"];
    $horarioPad = $_GET["horarioPad"];
    $religionPad = $_GET["religionPad"];
    $tiempoPad = $_GET["tiempoPad"];


    
    if($boton=="Siguiente"){
      $consulta="INSERT INTO padre 
        (cedPad, cedEst, nombreApellidoPad, parentescoPad, edadPad, lugarPad, fechaPad, nacionalidadPad, rifPad, edoCivilPad, justificativoPad, organismoPad, fehaPad, direccionPad, municipioPad, parroquiaPad, telefonoPad, celularPad, whastappPad, emailPad, profesionPad, cargoPad, empresaPad, direccionTrabPad, teleTrabPad, horarioPad, religionPad, tiempoPad) 
        VALUES 
        ('$cedPad', '$cedEst', '$nombreApellidoPad', '$parentescoPad', '$edadPad', '$lugarPad', '$fechaPad', '$nacionalidadPad', '$rifPad', '$edoCivilPad', '$justificativoPad', '$organismoPad', '$fehaPad', '$direccionPad', '$municipioPad', '$parroquiaPad', '$telefonoPad', '$celularPad', '$whastappPad', '$emailPad', '$profesionPad', '$cargoPad', '$empresaPad', '$direccionTrabPad', '$teleTrabPad', '$horarioPad', '$religionPad', '$tiempoPad')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
            echo "<script>window.location='entornofamiliar.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="estudiantes.php";});}, 100);</script>';
          }
    }
    if($boton=="Buscar"){
     $strQuery1= "SELECT * FROM padre WHERE cedPad ='$cedPad'";
     $strResultado1 = $obj_conexion->query($strQuery1);
     $strDatos1 = mysqli_fetch_array($strResultado1);
       $nombreApellidoPad  = $strDatos1['nombreApellidoPad'];
       $parentescoPad  = $strDatos1['parentescoPad'];
       $edadPad  = $strDatos1['edadPad'];
       $lugarPad  = $strDatos1['lugarPad'];
       $fechaPad  = $strDatos1['fechaPad'];
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
            <h6>Registro de Padre</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>de Padre
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
                    <label class="etiquetastec">Cedula del Padre</label>
                       <input type="text" class="form-control" name="cedPad" placeholder="Cedula del Padre" value="<?php echo $cedPad; ?>" >
            
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
                        <input type="text" class="form-control" name="nombreApellidoPad" placeholder="Nombre y Apellido" value="<?php echo $nombreApellidoPad; ?>" onkeypress="return soloLetras(event)">
               
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Parentezco</label>
                        <input type="text" class="form-control" name="parentescoPad" placeholder="Padre" value="Padre" onkeypress="return soloLetras(event)">
                </div>
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Edad</label>
                        <input type="text" class="form-control" name="edadPad" placeholder="Edad" onkeypress="return soloNumeros(event)">
                  
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Lugar de Nacimiento</label>
                        <input type="text" class="form-control" name="lugarPad" placeholder="Lugar de Nacimiento" value="<?php echo $lugarPad; ?>" >
                    
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Fecha  de Nacimiento</label>
                    <input type="date" class="form-control" name="fechaPad" placeholder="Fecha" value="<?php echo $fechaPad; ?>">
               
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Nacionalidad</label>
                        <select name="nacionalidadPad" id="" class="form-control">
                            <option value="S">Seleccione Nacionalidad</option>
                            <option value="Venezolano">Venezolano</option>
                            <option value="Extranjero">Extranjero</option>
                        </select>
                
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">RIF</label>
                    <input type="text" class="form-control" name="rifPad" placeholder="Indique el RIF">
              
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Estado Civil</label>
                    <select name="edoCivilPad" id="" class="form-control">
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
                        <select name="justificativoPad" id="" class="form-control">
                            <option value="S">Posee justificativo legal</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Organismo</label>
                        <input type="text" class="form-control" name="organismoPad" placeholder="Organismo">
                
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Fecha</label>
                        <input type="date" class="form-control" name="fehaPad" placeholder="Fecha">
                
                </div> 
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección</label>
                        <input type="text" class="form-control" name="direccionPad" placeholder="Dirección">
                   
                </div> 
            </div> 
            <br> 
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Municipio</label>
                        <input type="text" class="form-control" name="municipioPad" placeholder="Municipio" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Parroquia</label>
                        <input type="text" class="form-control" name="parroquiaPad" placeholder="Parroquia" onkeypress="return soloLetras(event)">
                
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Teléfono local</label>
                        <input type="text" class="form-control" name="telefonoPad" placeholder="Teléfono local">
                  
                </div>  
            </div> 
            <br> 
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono celular</label>
                        <input type="text" class="form-control" name="celularPad" placeholder="Teléfono celular sencillo">
               
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono celular con whatsapp</label>
                        <input type="text" class="form-control" name="whastappPad" placeholder="Teléfono celular con whatsapp">
                  
                </div> 
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Email</label>
                        <input type="text" class="form-control" name="emailPad" placeholder="Email">
                  
                </div> 
            </div>  
            <br> 
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Profesión</label>
                        <input type="text" class="form-control" name="profesionPad" placeholder="Profesión" onkeypress="return soloLetras(event)">
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Cargo</label>
                        <input type="text" class="form-control" name="cargoPad" placeholder="Cargo" onkeypress="return soloLetras(event)">
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Empresa/ Institución</label>
                        <input type="text" class="form-control" name="empresaPad" placeholder="Empresa/ Institución">
                    
                </div>  
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección del trabajo</label>
                        <input type="text" class="form-control" name="direccionTrabPad" placeholder="Dirección del trabajo">
                    
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono local del trabajo</label>
                        <input type="text" class="form-control" name="teleTrabPad" placeholder="Teléfono local del trabajo">
                 
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Horario</label>
                        <input type="text" class="form-control" name="horarioPad" placeholder="Horario">
               
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Religión</label>
                        <input type="text" class="form-control" name="religionPad" placeholder="Religión">
                  
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Tiempo conviviendo con el menor</label>
                        <input type="text" class="form-control" name="tiempoPad" placeholder="Tiempo conviviendo con el menor">
                  
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