
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
    $situacion =$_GET["situacion"];
    $relacion=$_GET["relacion"];
    $conquienvive =$_GET["conquienvive"];
    $familiares =$_GET["familiares"];
    $hermanos=$_GET["hermanos"];
    $hermanas =$_GET["hermanas"];
    $lugarhermanos = $_GET["lugarhermanos"];  
    $hermanoinstitu=$_GET["hermanoinstitu"];
    $hermanoano =$_GET["hermanoano"];
    $hermanoseccion = $_GET["hermanoseccion"];
    $hermanonombre=$_GET["hermanonombre"];
    $familiarinstitu =$_GET["familiarinstitu"];
    $familiarparentesco = $_GET["familiarparentesco"];  
    $familiarnombre=$_GET["familiarnombre"];
    $autoriza =$_GET["autoriza"];
    $quienretira = $_GET["quienretira"];
    $nombreretira = $_GET["nombreretira"];
    $familiarnombre1 = $_GET["familiarnombre1"];
    $familiarparentesco1 = $_GET["familiarparentesco1"];
    $familiartlfn1 = $_GET["familiartlfn1"];
    $familiarnombre2 = $_GET["familiarnombre2"];
    $familiarparentesco2 = $_GET["familiarparentesco2"];
    $familiartlfn2 = $_GET["familiartlfn2"];
    
    if($boton=="Siguiente"){
      $consulta="INSERT INTO entornofamiliar 
        (cedEst, situacion, relacion, conquienvive, familiares, hermanos, hermanas, lugarhermanos, hermanoinstitu, hermanoano, hermanoseccion, hermanonombre, familiarinstitu, familiarparentesco, familiarnombre, autoriza, quienretira, nombreretira, familiarnombre1, familiarparentesco1, familiartlfn1, familiarnombre2, familiarparentesco2, familiartlfn2) 
        VALUES 
        ('$cedEst', '$situacion', '$relacion', '$conquienvive', '$familiares', '$hermanos', '$hermanas', '$lugarhermanos', '$hermanoinstitu', '$hermanoano', '$hermanoseccion', '$hermanonombre', '$familiarinstitu', '$familiarparentesco', '$familiarnombre', '$autoriza', '$quienretira', '$nombreretira', '$familiarnombre1', '$familiarparentesco1', '$familiartlfn1', '$familiarnombre2', '$familiarparentesco2', '$familiartlfn2')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
            echo "<script>window.location='datosmedicos.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="entornofamiliar.php";});}, 100);</script>';
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
            <h6>Registro de Entorno Familiar</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>del Entorno
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
                    <label class="etiquetastec">Situación de la pareja</label>
                       <select name="situacion" id="" class="form-control">
                            <option value="S">Seleccione Situación de la pareja</option>
                            <option value="Concubinos">Concubinos</option>
                            <option value="Casados">Casados</option>
                            <option value="Viudo(a)">Viudo(a)</option>
                            <option value="Divorciados">Divorciados</option>
                            <option value="Separados">Separados</option>
                        </select>
   
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Relación actual de los padres</label>
                       <select name="relacion" id="" class="form-control">
                            <option value="S">Seleccione Relación actual de los padres</option>
                            <option value="Concubinos">Concubinos</option>
                            <option value="Casados">Casados</option>
                            <option value="Viudo(a)">Viudo(a)</option>
                            <option value="Divorciados">Divorciados</option>
                            <option value="Separados">Separados</option>
                        </select>
            
                </div>
            </div>  
             <br>     
            <div class="row">
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">¿Con quién convive el menor?</label>
                        <input type="text" class="form-control" name="conquienvive" placeholder="¿Con quién convive el menor?">
                 
                </div> 
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Familiares fuera del país</label>
                    <input type="text" class="form-control" name="familiares" placeholder="Familiares fuera del país:">
                
                </div> 
            </div> 
             <br>      
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Número de hermanos Varones</label>
                        <input type="text" class="form-control" name="hermanos" placeholder="Número de hermanos Varones:" onkeypress="return soloNumeros(event)">
                
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Número de hermanas Hembras</label>
                        <input type="text" class="form-control" name="hermanas" placeholder="Número de hermanas Hembras:" onkeypress="return soloNumeros(event)">
                    
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Lugar que ocupa con respecto a sus hermanos</label>
                        <input type="text" class="form-control" name="lugarhermanos" placeholder="Lugar que ocupa con respecto a sus hermanos:" onkeypress="return soloNumeros(event)">
                   
                </div> 
            </div>
             <br>     
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Tiene algún hermano (a) estudiando en la institución?</label>
                        <select name="hermanoinstitu" id="" class="form-control">
                            <option value="S">¿Tiene algún hermano (a) estudiando en la institución?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                  
                </div> 
              <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Año</label>
                        <input type="text" class="form-control" name="hermanoano" placeholder="Año">
                  
                </div> 
              <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Sección/ Mención</label>
                        <input type="text" class="form-control" name="hermanoseccion" placeholder="Sección/ Mención">
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Nombre del Hermano(a)</label>
                        <input type="text" class="form-control" name="hermanonombre" placeholder="Nombre del Hermano(a)" onkeypress="return soloLetras(event)">
                   
                </div> 
            </div> 
             <br>     
             <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Familiar trabajando en la institución</label>
                        <select name="familiarinstitu" id="" class="form-control">
                            <option value="S">¿Tiene algún familiar trabajando en la institución?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Parentesco</label>
                        <input type="text" class="form-control" name="familiarparentesco" placeholder="Parentesco" onkeypress="return soloLetras(event)">
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Nombre y Apellido</label>
                        <input type="text" class="form-control" name="familiarnombre" placeholder="Nombre y Apellido" onkeypress="return soloLetras(event)">
                   
                </div> 
            </div> 
             <br>     
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Autoriza al estudiante a retirarse solo de la institución?</label>
                        <select name="autoriza" id="" class="form-control">
                            <option value="S">¿Autoriza al estudiante a retirarse solo de la institución?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                 
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Quién lo retira? Parentesco?</label>
                        <input type="text" class="form-control" name="quienretira" placeholder="¿Quién lo retira? Parentesco?" onkeypress="return soloLetras(event)"> 
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Nombre y Apellido</label>
                        <input type="text" class="form-control" name="nombreretira" placeholder="Nombre y Apellido" onkeypress="return soloLetras(event)">
                  
                </div> 
            </div> 
             <br>     
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Familiar cercano: Nombre y apellido</label>
                        <input type="text" class="form-control" name="familiarnombre1" placeholder="Familiar cercano: Nombre y apellido" onkeypress="return soloLetras(event)">
               
                </div> 
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Parentesco</label>
                        <input type="text" class="form-control" name="familiarparentesco1" placeholder="Parentesco" onkeypress="return soloLetras(event)">
                  
                </div> 
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Tlf</label>
                        <input type="text" class="form-control" name="familiartlfn1" placeholder="Tlf">
                
                </div> 
            </div>
             <br>           
             <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Familiar cercano: Nombre y apellido</label>
                        <input type="text" class="form-control" name="familiarnombre2" placeholder="Familiar cercano: Nombre y apellido" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Parentesco</label>
                        <input type="text" class="form-control" name="familiarparentesco2" placeholder="Parentesco" onkeypress="return soloLetras(event)">
                    
                </div> 
              <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Tlf</label>
                        <input type="text" class="form-control" name="familiartlfn2" placeholder="Tlf">
                   
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