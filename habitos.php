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
    $horalevanta =$_GET["horalevanta"];
    $horadormir =$_GET["horadormir"];
    $tv=$_GET["tv"];
    $tvtiempo =$_GET["tvtiempo"];
    $actextra =$_GET["actextra"];
    $actextracual=$_GET["actextracual"];
    $actextrainstitucion =$_GET["actextrainstitucion"];
    $actextrahora = $_GET["actextrahora"];  
    $actextradireccion=$_GET["actextradireccion"];
    $actextrainstruct =$_GET["actextrainstruct"];
    $actextratlfn = $_GET["actextratlfn"];
    $actextratiempo=$_GET["actextratiempo"];
    $actextraestado =$_GET["actextraestado"];


    

    if($boton=="Finalizar"){
     echo $consulta="INSERT INTO habitos 
        (cedEst, horalevanta, horadormir, tv, tvtiempo, actextra, actextracual, actextrainstitucion, actextrahora, actextradireccion, actextrainstruct, actextratlfn, actextratiempo, actextraestado) 
        VALUES 
        ('$cedEst', '$horalevanta', '$horadormir', '$tv', '$tvtiempo', '$actextra', '$actextracual', '$actextrainstitucion', '$actextrahora', '$actextradireccion', '$actextrainstruct', '$actextratlfn', '$actextratiempo', '$actextraestado')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
          echo "<script>window.location='thankyou.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="index.php";});}, 100);</script>';
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
            <h6>Registro de Habitos</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>de Habitos del Estudiante
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
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">¿A qué hora se levanta?</label>
                        <input type="text" class="form-control" name="horalevanta" placeholder="¿A qué hora se levanta?">
                    
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">¿A qué hora se acuesta?</label>
                        <input type="text" class="form-control" name="horadormir" placeholder="¿A qué hora se acuesta?">
                    
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">¿Ve televisión?</label>
                        <select name="tv" id="" class="form-control">
                            <option value="S">¿Ve televisión?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            </select>
                   
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Tiempo diario</label>
                        <input type="text" class="form-control" name="tvtiempo" placeholder="Tiempo diario">
                    </div>
                
            </div>    
            <br>  
            <div class="row">   
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">¿Extracurriculares?</label>
                        <select name="actextra" id="" class="form-control">
                            <option value="S">¿Realiza actividades extracurriculares?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    
                </div>
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">¿Cuál?</label>
                        <input type="text" class="form-control" name="actextracual" placeholder="¿Cuál?">
                
                </div>
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Institución</label>
                       <input type="text" class="form-control" name="actextrainstitucion" placeholder="Institución?">
                  
                </div>
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Horario</label>
                        <input type="text" class="form-control" name="actextrahora" placeholder="Horario">
                   
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Dirección</label>
                        <input type="text" class="form-control" name="actextradireccion" placeholder="Dirección">
                
                </div>
            </div>   
            <br>  
            <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Nombre y apellido del instructor</label>
                        <input type="text" class="form-control" name="actextrainstruct" placeholder="Nombre y apellido del instructor" onkeypress="return soloLetras(event)">
                  
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Teléfono</label>
                        <input type="text" class="form-control" name="actextratlfn" placeholder="Teléfono">
                    
                </div>
            </div> 
            <br>  
            <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Tiempo realizando la actividad</label>
                        <input type="text" class="form-control" name="actextratiempo" placeholder="Tiempo realizando la actividad">
                   
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">¿Ha representado el estado en dicha actividad?</label>
                        <select name="actextraestado" id="" class="form-control">
                            <option value="S">¿Ha representado el estado en dicha actividad?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    
                </div>
            </div>  
            <br>   
           <div class="text-center">
           <div class="row">
                  <div class="col-lg-6 col-6">
                    <input type="submit" value="Finalizar" name="boton" class="btn bg-gradient-primary w-100">
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