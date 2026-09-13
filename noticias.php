
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
            <h6>Noticias</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Sistema </span>Escuela Tecnica
                  </p> 
                  <div class="row">
                     <div class="col-lg-12 col-12">
                        <div class="input-group input-group-outline my-3">
                            Inscripciones para el Periodo 2022 - 2023 comenzaran el 23 de Octubre del 2023
                            <br>
                            Requisitos
                            <ul>
                              <li>
                                4 Fotos carnet con el uniforme de gala ( ) 
                              </li>
                              <li>
                                2 copias centradas de la cedula, 1 copia por hoja ( )
                              </li>
                              <li>
                                Original ( ) y copia ( ) de la partida de nacimiento
                              </li>
                              <li>
                                Original ( ) y copia ( ) del certificado de educación primaria indicando el literal
                              </li>
                              <li>
                                Original ( ) y copia ( )de las notas certificadas de 1er año ( ), 2do año ( ), 3er año ( ), según sea el caso. Se toma en cuenta el último año cursado
                              </li>
                              <li>
                               REPRESENTANTE 1 Foto carnet del representante ( ) / de la madre ( ) / del padre ( ) 
                              </li>
                              <li>
                               REPRESENTANTE 1 copia centrada de cedula del representante ( ) / de la madre ( ) / del padre ( ) en hoja tipo carta. Pueden estar en la misma hoja
                              </li>
                              <li>
                               REPRESENTANTE Copia de la constancia de representación legal : poder notariado ( ) /autorización del CEDNA /CMDNNA ( ) en caso de no ser padres biológicos
                              </li>
                            </ul>
                        </div>
                    </div>
                  </div>
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