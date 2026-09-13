<?PHP 
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
    date_default_timezone_set("America/Caracas");
    session_start();
    $ano = $_POST['ano'];
    $seccion = $_POST['seccion'];
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
        .bg-gradient-primary {
    background-image: linear-gradient(195deg, #49a3f1 0%, #1a73e8 100%) !important;
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

            

            <h6>Listado de Actas</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Listado de </span>Actas
                  </p> 
                  <?php 

                  include('conexion.php');
                    $var_consulta= "SELECT * FROM dataescolar WHERE (ano LIKE '%$ano%') AND (seccion LIKE '%$seccion%')";
                    $var_resultado = $obj_conexion->query($var_consulta);

                    if($var_resultado->num_rows>0)
                        {
                        echo"<table border='0' align='center' class='table table-hover'>
                        <tr>
                            <th>Año Escolar</th>
                            <th>Año</th>
                            <th>Sección</th>
                            <th>Estudiante</th>
                            <th>Detalle</th>
                          </tr>";
                        while ($var_fila=$var_resultado->fetch_array())
                        {
                            $nueva = $var_fila["nrodespacho"];
                            

                            echo "<tr><td>".$var_fila["escolar"]."</td>";
                            echo "<td>".$var_fila["ano"]."</td>";
                            echo "<td>".$var_fila["seccion"]."</td>";
                                $cedulaEst = $var_fila["cedulaEst"];
                                $strQuery6= "SELECT * FROM estudiante WHERE cedulaEst  = '$cedulaEst'";
                                $strResultado6 = $obj_conexion->query($strQuery6);
                                $strDatos6 = mysqli_fetch_array($strResultado6);
                                $nombreApellidoEst   = $strDatos6['nombreApellidoEst'];
                            echo "<td>".$cedulaEst. " - " . $nombreApellidoEst."</td>";
                            echo "<td><a href='../reportes/acta.php?cedulaEst=".$cedulaEst."' class='btn bg-gradient-primary w-100'><i class='material-icons opacity-10'>print</i></a></td></tr>";
                        }
                    }
                    else
                        {
                        echo "No hay Registros";
                    }
                ?>                     
                <form action="#" method="post" enctype="multipart/form-data"> 
                <div class="row">
                    <div class="col-lg-5 col-5">    
                      <div class="input-group input-group-outline my-3">             
                          <select name="ano" id="" class="form-control">
                            <option value="S">Año a Estudiar</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                      </div>   
                    </div>
                    <div class="col-lg-5 col-5">    
                      <div class="input-group input-group-outline my-3">             
                          <select name="seccion" id="" class="form-control">
                            <option value="S">Sección</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>
                      </div>   
                    </div>
                    <div class="col-lg-2 col-2">    
                      <div class="input-group input-group-outline my-3">             
                      <button type="submit" name="boton" value="Buscar" class="btn bg-gradient-primary w-100">Buscar</button>
                      </div>   
                    </div>
                  </div> 
                </form> 
          </div>     
        </div>
      </div>
      
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