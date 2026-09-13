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

    $boton=$_POST["boton"];
    $nacPersonal =$_POST["nacPersonal"];
    $cedPersonal =$_POST["cedPersonal"];
    $nombrePersonal = $_POST["nombrePersonal"];
    $apellidoPersonal =$_POST["apellidoPersonal"];
    $fechaNac=$_POST["fechaNac"];
    $emailPersonal =$_POST["emailPersonal"];
      $ope1 = $_POST["ope1Personal"];
      $num1 = $_POST["num1Personal"];
    $numCasa= $ope1 ."-". $num1;
      $ope2 =  $_POST["ope2Personal"];
      $num2 =  $_POST["num2Personal"];
    $numCel= $ope2 ."-". $num2;
    $direPersonal =$_POST["direPersonal"];
    $cargoPersonal=$_POST["cargoPersonal"];
    $fechaIngreso =$_POST["fechaIngreso"];
    $passPersonal = $_POST["cedPersonal"];
    $sobre = $_POST["sobre"];

    if($boton=="Registrar"){

      $consulta="INSERT INTO personal (nacPersonal , cedPersonal, nombrePersonal, apellidoPersonal, fechaNac, emailPersonal, numCasa, numCel, direPersonal, cargoPersonal, fechaIngreso, passPersonal, sobre) 
        VALUES ('$nacPersonal', '$cedPersonal', '$nombrePersonal', '$apellidoPersonal', '$fechaNac', '$emailPersonal', '$numCasa', '$numCel', '$direPersonal', '$cargoPersonal', '$fechaIngreso', md5('$cedPersonal'), '$sobre')";

        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
          echo '<script>setTimeout(function(){swal({title:"Registro Exito!!!",text:"Personal Almacenado",type:"success"},
          function(isConfirm){location.href="personal.php";});}, 100);</script>';

          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Personal No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="personal.php";});}, 100);</script>';
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
            <h6>Registro de Personal</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Personal</span> Escuela Tecnica
                  </p> 
            <form role="form" class="text-start" method="post">
            <div class="row">
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Nacionalidad</label>
                        <select name="nacPersonal" id="" class="form-control">
                            <option value="">Seleccione Opción</option>
                            <option value="V">V</option>
                            <option value="E">E</option>
                        </select>
                    </div>

                <div class="col-lg-9 col-9">
                        <label class="etiquetastec">Cedula del Personal</label>
                        <input type="text" class="form-control" name="cedPersonal" placeholder="Cedula del Personal">
                </div>
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                     <label class="etiquetastec">Nombre de Personal</label>
                        <input type="text" class="form-control" name="nombrePersonal" placeholder="Nombre de Personal" required onkeypress="return soloLetras(event)" >

                </div> 
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Apellido de Personal</label>
                        <input type="text" class="form-control" name="apellidoPersonal" placeholder="Apellido de Personal" required onkeypress="return soloLetras(event)" >

                </div> 
            </div>  
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNac" placeholder="Fecha de Nacimiento" required>
                    
                </div> 
                <div class="col-lg-8 col-8">
                    <label class="etiquetastec">Email de Personal</label>
                    <input type="email" class="form-control" name="emailPersonal" placeholder="Email de Personal" required>
                    
                </div> 
            </div>  
            <br>
            <div class="row">
                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Seleccione</label>
                        <select name="ope1Personal" id="" class="form-control" required>
                            <option value="S">Seleccione</option>
                            <option value="0414">0274</option>
                            <option value="0424">0275</option>
                        </select>
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Numero de Habitación</label>
                        <input type="text" class="form-control" name="num1Personal" placeholder="Numero de Habitación" required onkeypress="return soloNumeros(event)">
                    
                </div>

                <div class="col-lg-2 col-2">
                    <label class="etiquetastec">Seleccione</label>
                        <select name="ope2Personal" id="" class="form-control" required>
                            <option value="S">Seleccione</option>
                            <option value="0414">0414</option>
                            <option value="0424">0424</option>
                            <option value="0416">0416</option>
                            <option value="0426">0426</option>
                            <option value="0412">0412</option>
                        </select>
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Celular de Personal</label>
                        <input type="text" class="form-control" name="num2Personal" placeholder="Celular de Personal" onkeypress="return soloNumeros(event)" title="Ingrese su Celular">
                    
                </div>
            </div> 
            <br>  
            <div class="row">
                <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Dirección</label>           
                        <textarea name="direPersonal" id="" rows="3" class="form-control" placeholder="Dirección"></textarea>
                    
                </div>
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Elige el Cargo</label>
                        <?php  
                                include('conexion.php');
                                $sql = "SELECT * FROM cargos ORDER BY id";
                                $busqueda = $obj_conexion -> query($sql);
                                echo "<select name='cargoPersonal' id='cargoPersonal' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Seleccione el Nivel de Acceso del Usuario'>"; 
                                echo "<option disabled selected value='No Seleccionada'>Elige el Cargo</option>"; 
                            
                                while ($row=mysqli_fetch_array($busqueda))
                                {
                                  echo "<option value='".trim($row["cargo"])."'>".trim($row["cargo"]);
                                }
                                echo '</select>';                         
                              ?>
                   
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Seleccione</label>
                        <input type="date" class="form-control" name="fechaIngreso" placeholder="Fecha de Ingreso a Clardica">
                    
                </div>
            </div> 
            <br>
           <div class="text-center">
            <div class="row">
                  <div class="col-lg-4 col-6">
                    <input type="submit" value="Registrar" name="boton" class="btn bg-gradient-primary w-100">
                  </div>
                  <div class="col-lg-4 col-6">
                    <a href="listado_personal.php" class="btn bg-gradient-primary w-100">Ver Listado de Personal</a>
                  </div>
                  <div class="col-lg-4 col-6">
                    <a href="index.php" class="btn bg-gradient-primary w-100">Regresar</a>
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