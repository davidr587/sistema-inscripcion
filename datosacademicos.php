
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
    $procedencia =$_GET["procedencia"];
    $direccion=$_GET["direccion"];
    $rendimiento =$_GET["rendimiento"];
    $repetido =$_GET["repetido"];
    $repetidocuales=$_GET["repetidocuales"];
    $repetidoano =$_GET["repetidoano"];
    $pendiente = $_GET["pendiente"];  
    $pendientecuales=$_GET["pendientecuales"];
    $pendientemotivo =$_GET["pendientemotivo"];
    $profesor = $_GET["profesor"];
    $area=$_GET["area"];
    $literal6 =$_GET["literal6"];
    $promediolapso = $_GET["promediolapso"];  
    $promediocurso=$_GET["promediocurso"];

    

    if($boton=="Siguiente"){
      $consulta="INSERT INTO academico 
        (cedEst, procedencia, direccion, rendimiento, repetido, repetidocuales, repetidoano, pendiente, pendientecuales, pendientemotivo, profesor, area, literal6, promediolapso, promediocurso) 
        VALUES 
        ('$cedEst', '$procedencia', '$direccion', '$rendimiento', '$repetido', '$repetidocuales', '$repetidoano', '$pendiente', '$pendientecuales', '$pendientemotivo', '$profesor', '$area', '$literal6', '$promediolapso', '$promediocurso')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
          echo "<script>window.location='habitos.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="datosacademicos.php";});}, 100);</script>';
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
            <h6>Registro de Académicos</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>académicos del estudiante
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
                <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Institución de procedencia</label>
                        <input type="text" class="form-control" name="procedencia" placeholder="Institución de procedencia">
                </div>
            </div> 
            <br>
            <div class="row">   
                <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección</label>
                        <input type="text" class="form-control" name="direccion" placeholder="Dirección">
                    
                </div>
            </div>    
            <br>
            <div class="row">   
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Rendimiento escolar</label>
                        <select name="rendimiento" id="" class="form-control">
                            <option value="S">¿Cómo piensas que ha sido tu rendimiento escolar?</option>
                            <option value="Muy bueno">Muy bueno</option>
                            <option value="Bueno">Bueno</option>
                            <option value="Regular">Regular</option>
                            <option value="Malo">Malo</option>
                            <option value="Muy malo">Muy malo</option>
                        </select>
                   
                </div>
                <div class="col-lg-3 col-3">
                   <label class="etiquetastec">¿Has repetido año?</label>
                          <select name="repetido" id="" class="form-control">
                            <option value="S">¿Has repetido año?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                         </select>
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">¿Cuáles?</label>
                          <input type="text" class="form-control" name="repetidocuales" placeholder="¿Cuáles?">
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Motivo</label>
                          <input type="text" class="form-control" name="repetidoano" placeholder="Motivo">
                </div>
            </div> 
            <br>
            <div class="row">   
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Materias Pendientes</label>
                        <select name="pendiente" id="" class="form-control">
                            <option value="S">¿Tienes materias pendientes del año anterior? </option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Cuáles?</label>
                          <input type="text" class="form-control" name="pendientecuales" placeholder="¿Cuáles?">
            
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Motivo</label>
                           <input type="text" class="form-control" name="pendientemotivo" placeholder="Motivo">
                    
                </div>
            </div> 
            <br>
            <div class="row">   
                <div class="col-lg-6 col-6">
                 <label class="etiquetastec">Nombre y apellido del profesor</label>
                        <input type="text" class="form-control" name="profesor" placeholder="Nombre y apellido del profesor">
             
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Año del área de formación</label>
                        <input type="text" class="form-control" name="area" placeholder="Año del área de formación pendiente">
                   
                </div>          
            </div>
            <br>
           <div class="row">   
                <div class="col-lg-4 col-4">
                   <label class="etiquetastec">Literal obtenido en 6to grado</label>
                        <input type="text" class="form-control" name="literal6" placeholder="Literal obtenido en 6to grado" onkeypress="return soloLetras(event)">
                    
                </div>
                <div class="col-lg-4 col-4">
                   <label class="etiquetastec">Promedio del lapso anterior</label>
                          <input type="text" class="form-control" name="promediolapso" placeholder="Promedio del lapso anterior">
                 
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Promedio final del año anterior cursado</label>
                           <input type="text" class="form-control" name="promediocurso" placeholder="Promedio final del año anterior cursado">
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