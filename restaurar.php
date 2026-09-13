
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Sistema de Inscripción
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
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
        .card-body.p-3 {
            background: white;
        }
        .bg-gradient-primary {
            background-image: linear-gradient(195deg, #0084d1 0%, #032d58 100%) !important;
        }
        a#cruz {
            color: #00cf36;
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
          <h4 class="widget-title">Insertar Base de Datos</h4>
                    <div class="widget-body">
                    <div class="widget-main">

                      <div class="form-group">
                        <div class="col-xs-12">
                          <label class="ace-file-input ace-file-multiple"><input multiple="" type="file" id="id-input-file-3"></label>
                           <div id="myBar"></div>
                        </div>
                      </div>

                      <label>
                        <input type="checkbox" name="file-format" id="id-file-format" class="ace" required>
                        <span class="lbl"> Solo Archivos SQL</span>

                        <br>
                        <button onclick="move()" class="btn bg-gradient-primary w-100">Restaurar</button>
                      </label>
                    </div>
                  </div>
            </div>  
            <br>
              <form> 
            </form>                 
            </div>     
        </div>
      </div>


 
      <?php include("footer.php"); ?>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
    <script type="text/javascript">
    function move() {
        var elem = document.getElementById("myBar");
        var width = 1;
        var id = setInterval(frame, 100);
        function frame() {
          if (width >= 100) {
            clearInterval(id);
                  location.href="logout.php";   
          } else {
            width++;
            elem.style.width = width + '%';
          }
        }
      }
            </script>        
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
 

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>