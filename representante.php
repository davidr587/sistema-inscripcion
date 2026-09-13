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
    $cedRep =$_GET["cedRep"];
    $cedEst = $_GET["cedEst"];
    $nombreApellidoRep =$_GET["nombreApellidoRep"];
    $parentescoRep=$_GET["parentescoRep"];
    $edadRep =$_GET["edadRep"];
    $lugarRep =$_GET["lugarRep"];
    $fechaRep=$_GET["fechaRep"];
    $nacionalidadRep =$_GET["nacionalidadRep"];
    $rifRep = $_GET["rifRep"];  
    $edoCivilRep=$_GET["edoCivilRep"];
    $justificativoRep =$_GET["justificativoRep"];
    $organismoRep = $_GET["organismoRep"];
    $fehaRep=$_GET["fehaRep"];
    $direccionRep =$_GET["direccionRep"];
    $municipioRep = $_GET["municipioRep"];  
    $parroquiaRep=$_GET["parroquiaRep"];
    $telefonoRep =$_GET["telefonoRep"];
    $celularRep = $_GET["celularRep"];
    $whastappRep = $_GET["whastappRep"];
    $emailRep = $_GET["emailRep"];
    $profesionRep = $_GET["profesionRep"];
    $cargoRep = $_GET["cargoRep"];
    $empresaRep = $_GET["empresaRep"];
    $direccionTrabRep = $_GET["direccionTrabRep"];
    $teleTrabRep = $_GET["teleTrabRep"];
    $horarioRep = $_GET["horarioRep"];
    $religionRep = $_GET["religionRep"];
    $tiempoRep = $_GET["tiempoRep"];
    $bancoRep = $_GET["bancoRep"];
    $tipoRep = $_GET["tipoRep"];
    $nroRep = $_GET["nroRep"];
    $carnetRep = $_GET["carnetRep"];
    $codCarnetRep = $_GET["codCarnetRep"];
    $serialCarnetRep = $_GET["serialCarnetRep"];

    
    if($boton=="Siguiente"){
      $consulta="INSERT INTO representante 
        (cedRep, cedEst, nombreApellidoRep, parentescoRep, edadRep, lugarRep, fechaRep, nacionalidadRep, rifRep, edoCivilRep, justificativoRep, organismoRep, fehaRep, direccionRep, municipioRep, parroquiaRep, telefonoRep, celularRep, whastappRep, emailRep, profesionRep, cargoRep, empresaRep, direccionTrabRep, teleTrabRep, horarioRep, religionRep, tiempoRep, bancoRep, tipoRep, nroRep, carnetRep, codCarnetRep, serialCarnetRep) 
        VALUES 
        ('$cedRep', '$cedEst', '$nombreApellidoRep', '$parentescoRep', '$edadRep', '$lugarRep', '$fechaRep', '$nacionalidadRep', '$rifRep', '$edoCivilRep', '$justificativoRep', '$organismoRep', '$fehaRep', '$direccionRep', '$municipioRep', '$parroquiaRep', '$telefonoRep', '$celularRep', '$whastappRep', '$emailRep', '$profesionRep', '$cargoRep', '$empresaRep', '$direccionTrabRep', '$teleTrabRep', '$horarioRep', '$religionRep', '$tiempoRep', '$bancoRep', '$tipoRep', '$nroRep', '$carnetRep', '$codCarnetRep', '$serialCarnetRep')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
            echo "<script>window.location='madre.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="representante.php";});}, 100);</script>';
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
            <h6>Registro de Representantes</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>de Representante
                  </p> 
            <form role="form" class="text-start" method="get">
            <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Cedula del Estudiante</label>
                        <input type="text" class="form-control" name="cedEst" placeholder="Cedula del Estudiante" value="<?PHP echo $cedEst; ?>">
                    
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Cedula del Representante</label>
                       <input type="text" class="form-control" name="cedRep" placeholder="Cedula del Representante" required>
                   
                </div>
            </div>   
            <br> 
             <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Nombre y Apellido</label>
                        <input type="text" class="form-control" name="nombreApellidoRep" placeholder="Nombre y Apellido" onkeypress="return soloLetras(event)" required>
                    
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Parentezco</label>
                       <select name="parentescoRep" id="" class="form-control">
                            <option value="S">Seleccione Parentezco</option>
                            <option value="Madre">Madre</option>
                            <option value="Padre">Padre</option>
                            <option value="Padre">Hermano(a)</option>
                            <option value="Padre">Abuelo(a)</option>
                            <option value="Padre">Tio(a)</option>
                            <option value="Padre">Otro</option>
                        </select>
                 
                </div>
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Edad</label>
                        <input type="text" class="form-control" name="edadRep" placeholder="Edad" onkeypress="return soloNumeros(event)" required>
                
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Lugar de Nacimiento</label>
                    <input type="text" class="form-control" name="lugarRep" placeholder="Lugar de Nacimiento" required>
                 
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Fecha</label>
                    <input type="text" class="form-control" name="fechaRep" placeholder="Fecha" required>
                    </div>
           
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Nacionalidad</label>
                        <select name="nacionalidadRep" id="" class="form-control">
                            <option value="S">Seleccione Nacionalidad</option>
                            <option value="Venezolano">Venezolano</option>
                            <option value="Extranjero">Extranjero</option>
                        </select>
           
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">RIF</label>
                        <input type="text" class="form-control" name="rifRep" placeholder="Indique el RIF" required>
                    
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Estado Civil</label>
                    <select name="edoCivilRep" id="" class="form-control">
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
                    <label class="etiquetastec">Justificativo legal</label >
                        <select name="justificativoRep" id="" class="form-control" required>
                            <option value="S">Posee justificativo legal</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Organismo</label>
                        <input type="text" class="form-control" name="organismoRep" placeholder="Organismo" onkeypress="return soloLetras(event)" required>
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Fecha</label>
                        <input type="text" class="form-control" name="fehaRep" placeholder="Fecha">
                    </div>
                
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección</label>
                        <input type="text" class="form-control" name="direccionRep" placeholder="Dirección">
                   
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Municipio</label>
                        <input type="text" class="form-control" name="municipioRep" placeholder="Municipio" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Parroquia</label>
                        <input type="text" class="form-control" name="parroquiaRep" placeholder="Parroquia" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Teléfono local</label>
                        <input type="text" class="form-control" name="telefonoRep" placeholder="Teléfono local">
                   
                </div>  
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono celular sencillo</label>
                        <input type="text" class="form-control" name="celularRep" placeholder="Teléfono celular sencillo">
                    
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono celular con whatsapp</label>
                        <input type="text" class="form-control" name="whastappRep" placeholder="Teléfono celular con whatsapp">
                    
                </div> 
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Email</label>
                        <input type="text" class="form-control" name="emailRep" placeholder="Email">
                    
                </div> 
            </div>   
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Profesión</label>
                        <input type="text" class="form-control" name="profesionRep" placeholder="Profesión" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Cargo</label>
                        <input type="text" class="form-control" name="cargoRep" placeholder="Cargo" onkeypress="return soloLetras(event)">
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Empresa/ Institución</label>
                        <input type="text" class="form-control" name="empresaRep" placeholder="Empresa/ Institución" onkeypress="return soloLetras(event)">
                    
                </div>  
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección del trabajo</label>
                        <input type="text" class="form-control" name="direccionTrabRep" placeholder="Dirección del trabajo">
                  
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono local del trabajo</label>
                        <input type="text" class="form-control" name="teleTrabRep" placeholder="Teléfono local del trabajo">
                    
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Horario</label>
                        <input type="text" class="form-control" name="horarioRep" placeholder="Horario">
                    
                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Religión</label>
                        <input type="text" class="form-control" name="religionRep" placeholder="Religión" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Tiempo conviviendo con el menor</label>
                        <input type="text" class="form-control" name="tiempoRep" placeholder="Tiempo conviviendo con el menor">
                   
                </div> 
            </div>   
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Cuenta bancaria: Banco</label>
                        <input type="text" class="form-control" name="bancoRep" placeholder="Cuenta bancaria: Banco">
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Tipo de cuenta</label>
                        <input type="text" class="form-control" name="tipoRep" placeholder="Tipo de cuenta">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Nº</label>
                        <input type="text" class="form-control" name="nroRep" placeholder="Nº">
                 
                </div>  
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Posee Carnet de la patria?</label>
                        <select name="carnetRep" id="" class="form-control">
                            <option value="S">¿Posee Carnet de la patria?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Código</label>
                        <input type="text" class="form-control" name="codCarnetRep" placeholder="Código">
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Serial</label>
                        <input type="text" class="form-control" name="serialCarnetRep" placeholder="Serial">
                  
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