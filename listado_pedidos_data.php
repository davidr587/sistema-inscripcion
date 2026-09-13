<?PHP 
  error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
  date_default_timezone_set("America/Caracas");
  /*session_start();
  if (!isset($_SESSION['user_email'])) {
      header('Location: login.php');
  }
  */
    include('conexion.php');
    $nrodespacho = $_GET['nrodespacho'];

    $sql = "SELECT * FROM despacho WHERE nrodespacho ='$nrodespacho'";
    $busqueda = $obj_conexion -> query($sql);
    if($registro=mysqli_fetch_array($busqueda)){
      $origen = $registro['origen'];
      $destino = $registro['destino'];
      $conductor = $registro['conductor'];
      $vehiculo = $registro['vehiculo'];
      $fechadesalida = $registro['fechadesalida'];
      $fechadeentrega = $registro['fechadeentrega'];
        }

    $sql1 = "SELECT * FROM personal WHERE cedPersonal  ='$conductor'";
    $busqueda1 = $obj_conexion -> query($sql1);
    if($registro1=mysqli_fetch_array($busqueda1)){
      $nombrePersonal = $registro1['nombrePersonal'];
      $apellidoPersonal = $registro1['apellidoPersonal'];
        }

    $sql2 = "SELECT * FROM vehiculo WHERE nro  ='$vehiculo'";
    $busqueda2 = $obj_conexion -> query($sql2);
    if($registro2=mysqli_fetch_array($busqueda2)){
      $modelo = $registro2['modelo'];
      $marca = $registro2['marca'];
      $placa = $registro2['placa'];
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Clardica System 1.01
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
        i.material-icons.text-sm.me-2.dabu {
            color: #0aa934;
        }  
        span.text-dark.font-weight-bold.ms-sm-2 {
            font-size: 14px;
        }
        span.mb-2.text-xs {
            font-size: 14px !important;
        }
        span.mb-5.text-xs {
            font-size: 14px !important;
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

            

            <h6>Despacho</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos</span> de Despacho
                  </p> 
                    
                <form action="#" method="post" enctype="multipart/form-data"> 
                <div class="row">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        <span class="mb-2 text-xs">Nro de Despacho: <span class="text-dark font-weight-bold ms-sm-2"><?PHP echo $nrodespacho; ?></span></span>

                        <span class="mb-2 text-xs">Origen: <span class="text-dark font-weight-bold ms-sm-2"><?PHP echo $origen; ?></span></span>

                        <span class="mb-2 text-xs">Destino: <span class="text-dark font-weight-bold ms-sm-2"><?PHP echo $destino; ?></span></span>

                        <span class="mb-2 text-xs">Nombre de Conductor: <span class="text-dark font-weight-bold ms-sm-2"><?PHP echo $nombrePersonal. " " .$apellidoPersonal; ?></span></span>

                        <span class="mb-2 text-xs">Vehiculo: <span class="text-dark font-weight-bold ms-sm-2"><?PHP echo $modelo. " " .$marca. " ".$placa; ?></span></span>

                        <span class="mb-2 text-xs">Fecha de Salida: <span class="text-dark font-weight-bold ms-sm-2"><?PHP echo $fechadesalida; ?></span></span>
    
                        <span class="mb-2 text-xs">Fecha de Llegada: <span class="text-dark font-weight-bold ms-sm-2"><?PHP echo $fechadeentrega; ?></span></span>
                                          
                      </div>
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-dark px-3 mb-0" href="listado_pedidos.php"><i class="material-icons text-sm me-2 dabu">cached</i>Regresar</a>
                      </div>
                    </li>
                    <p class="text-sm mb-0">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Productos</span> en el Despacho
                    </p> 
                    <?php 

                        include('conexion.php');
                          $var_consulta= "SELECT * FROM despachoproducto WHERE nrodespacho LIKE '%$nrodespacho%'";
                          $var_resultado = $obj_conexion->query($var_consulta);

                          if($var_resultado->num_rows>0)
                              {
                              echo"<table border='0' align='center' class='table table-hover'>
                              <tr>
                                  <th><span class='text-dark font-weight-bold ms-sm-2 best'>Codigo</span></th>
                                  <th><span class='text-dark font-weight-bold ms-sm-2 best'>Nombre</span></th>
                                  <th><span class='text-dark font-weight-bold ms-sm-2 best'>Cantidad</span></th>
                                </tr>";
                              while ($var_fila=$var_resultado->fetch_array())
                              {
                                  $code = $var_fila["code"];
                                  
                                  echo "<td><span class='mb-5 text-xs'>".$code."</span></td>";
                                  echo "<td><span class='mb-5 text-xs'>".$var_fila["name"]."</span></td>";
                                  echo "<td><span class='mb-5 text-xs'>".$var_fila["cant"]."</span></td></tr>";
                              }
                          }
                          else
                              {
                              echo "No hay Productos en este despacho";
                          }
                        ?>  
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