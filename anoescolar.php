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
    $escolar =$_GET["escolar"];
    $ano =$_GET["ano"];
    $nomSeccion = $_GET["nomSeccion"];
    $fecha =$_GET["fecha"];
    $cedulaEst =$_GET["cedulaEst"];

    if($boton=="Siguiente"){
      $consulta="INSERT INTO dataescolar (escolar, ano, nomSeccion, fecha, cedulaEst) 
        VALUES ('$escolar', '$ano', '$nomSeccion', '$fecha', '$cedulaEst')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
          echo "<script>window.location='estudiantes.php?cedulaEst=$cedulaEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="anoescolar.php";});}, 100);</script>';
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
            <h6>Registro de Inscripción</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>del Año Escolar
                  </p> 
            <form role="form" class="text-start" method="get">
            <div class="row">
                
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Año Escolar</label>
                         <?php  
                                include('conexion.php');

                                $sql = "SELECT * FROM anoescolar";
                                $busqueda = $obj_conexion -> query($sql);
                                echo "<select name='escolar' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Seleccione Año Escolar'>"; 
                                echo "<option disabled selected value='No Seleccionada'>Elige la Año Escolar</option>"; 
                            
                                while ($row=mysqli_fetch_array($busqueda))
                                {
                                  echo "<option value='".trim($row["ano"])."'>".trim($row["ano"]);
                                }
                                echo '</select>';                         
                              ?>
                </div>
                <div class="col-lg-8 col-8">
                    <label class="etiquetastec">Año que va a Cursar del Estudiante</label>
                        <select name="ano" id="" class="form-control">
                            <option value="S">Seleccione Año que va a Cursar del Estudiante</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                </div>
            </div>    
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Sección</label>
                        <?php  
                                include('conexion.php');

                                $sql = "SELECT * FROM seccion";
                                $busqueda = $obj_conexion -> query($sql);
                                echo "<select name='nomSeccion' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Seleccione la Sección'>"; 
                                echo "<option disabled selected value='No Seleccionada'>Elige la Sección</option>"; 
                            
                                while ($row=mysqli_fetch_array($busqueda))
                                {
                                  echo "<option value='".trim($row["nomSeccion"])."'>".trim($row["nomSeccion"]);
                                }
                                echo '</select>';                         
                              ?>
                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Fecha de Inscripción</label>
                        <input type="date" class="form-control" name="fecha" placeholder="Fecha de Inscripción">
                </div> 
            </div>  
            <br>
           <div class="row">
              <div class="col-lg-6 col-6">
                  <label class="etiquetastec">Cedula del Estudiante</label>
                        <input type="text" class="form-control" name="cedulaEst" placeholder="Cedula del Estudiante a Inscribir">
                    
                </div> 
              <div class="col-lg-6 col-6">
                   <label class="etiquetastec"></label>
                        <input type="submit" value="Siguiente" name="boton" class="btn bg-gradient-primary w-100">
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