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
    $traslado =$_GET["traslado"];
    $trasladotiempo=$_GET["trasladotiempo"];
    $nropersonas =$_GET["nropersonas"];
    $quienaporta =$_GET["quienaporta"];
    $ingreso=$_GET["ingreso"];
    $dependen =$_GET["dependen"];
    $beca = $_GET["beca"];  
    $becaorganismo=$_GET["becaorganismo"];
    $becamonto =$_GET["becamonto"];
    $becafrecuencia = $_GET["becafrecuencia"];
    $canaima=$_GET["canaima"];
    $canaimaserial =$_GET["canaimaserial"];
    $canaimacondicion = $_GET["canaimacondicion"];  
    $desayuno=$_GET["desayuno"];
    $almuerzo =$_GET["almuerzo"];
    $comedor = $_GET["comedor"];
    $comedoruso = $_GET["comedoruso"];
    $situacion = $_GET["situacion"];
    $comidas = $_GET["comidas"];
    $cantidad = $_GET["cantidad"];
    $calidad = $_GET["calidad"];
    

    if($boton=="Siguiente"){
     echo $consulta="INSERT INTO socioeconomico 
        (cedEst, traslado, trasladotiempo, nropersonas, quienaporta, ingreso, dependen, beca, becaorganismo, becamonto, becafrecuencia, canaima, canaimaserial, canaimacondicion, desayuno, almuerzo, comedor, comedoruso, situacion, comidas, cantidad, calidad) 
        VALUES 
        ('$cedEst', '$traslado', '$trasladotiempo', '$nropersonas', '$quienaporta', '$ingreso', '$dependen', '$beca', '$becaorganismo', '$becamonto', '$becafrecuencia', '$canaima', '$canaimaserial', '$canaimacondicion', '$desayuno', '$almuerzo', '$comedor', '$comedoruso', '$situacion', '$comidas', '$cantidad', '$calidad')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
          echo "<script>window.location='vivienda.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="datossocioeconomicos.php";});}, 100);</script>';
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
            <h6>Registro de Socioeconomicos</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>socioeconomicos del estudiante
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
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Cómo se traslada de su hogar a la institución?</label>
                       <select name="traslado" id="" class="form-control">
                            <option value="S">¿Cómo se traslada de su hogar a la institución?</option>
                            <option value="Buseta">Buseta</option>
                            <option value="Carro">Carro</option>
                            <option value="Caminando">Caminando</option>
                        </select>
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Tiempo de trayecto</label>
                          <input type="text" class="form-control" name="trasladotiempo" placeholder="Tiempo de trayecto">
                    </div>
               
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Número de personas que aportan al hogar</label>
                          <input type="text" class="form-control" name="nropersonas" placeholder="Número de personas que aportan al hogar" onkeypress="return soloNumeros(event)">
                   
                </div>
            </div>  
            <br>
            <div class="row">   
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Quienes aportan?</label>
                        <input type="text" class="form-control" name="quienaporta" placeholder="¿Quienes aportan?">
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Ingreso mensual familiar aproximado</label>
                          <input type="text" class="form-control" name="ingreso" placeholder="Ingreso mensual familiar aproximado" 
onkeypress="return soloNumeros(event)">
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Número de personas que dependen del ingreso familiar</label>
                          <input type="text" class="form-control" name="dependen" placeholder="Número de personas que dependen del ingreso familiar" 
onkeypress="return soloNumeros(event)">
                    
                </div>
            </div> 
            <br>
            <div class="row">   
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">¿Posee beca escolar?</label>
                        <select name="beca" id="" class="form-control">
                            <option value="S">¿Posee beca escolar?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                   
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Organismo</label>
                          <input type="text" class="form-control" name="becaorganismo" placeholder="Organismo">
                   
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Monto</label>
                          <input type="text" class="form-control" name="becamonto" placeholder="Monto">
                    
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Frecuencia</label>
                          <select name="becafrecuencia" id="" class="form-control">
                            <option value="S">Frecuencia</option>
                            <option value="Mensual">Mensual</option>
                            <option value="Anual">Anual</option>
                        </select>
                    
                </div>
            </div> 
            <br>
            <div class="row">   
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Le dieron Canaima?</label>
                        <select name="canaima" id="" class="form-control">
                            <option value="S">¿Le dieron Canaima?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Serial</label>
                          <input type="text" class="form-control" name="canaimaserial" placeholder="Serial">
                   
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Estatus de la Canaima?</label>
                          <select name="canaimacondicion" id="" class="form-control">
                            <option value="S">¿Estatus de la Canaima?</option>
                            <option value="Funcional">Funcional</option>
                            <option value="Dañada">Dañada</option>
                            <option value="Extraviada">Extraviada</option>
                            <option value="Reportada">Reportada</option>
                        </select>
                   
                </div>
            </div> 
            <br>
            <div class="row">   
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">Desayuno frecuente del niño</label>
                        <select name="desayuno" id="" class="form-control">
                            <option value="S">Desayuno frecuente del niño</option>
                            <option value="En casa">En casa</option>
                            <option value="Compra en cafetín">Compra en cafetín</option>
                            <option value="Envase del hogar">Envase del hogar</option>
                            <option value="No desayuna">No desayuna</option>
                        </select>
                    
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">¿Traerá su almuerzo?</label>
                        <select name="almuerzo" id="" class="form-control">
                            <option value="S">¿Traerá su almuerzo?</option>
                            <option value="Sí">Sí</option>
                            <option value="No">No</option>
                        </select>
                    
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">¿Necesita realmente el comedor institucional?</label>
                          <select name="comedor" id="" class="form-control">
                            <option value="S">¿Necesita realmente el comedor institucional?</option>
                            <option value="Sí">Sí</option>
                            <option value="No">No</option>
                        </select>
                   
                </div>
                <div class="col-lg-3 col-3">
                    <label class="etiquetastec">¿Lo usará?</label>
                         <select name="comedoruso" id="" class="form-control">
                            <option value="S">¿Lo usará?</option>
                            <option value="Sí">Sí</option>
                            <option value="No">No</option>
                        </select>
                    
                </div>
            </div>
            <br>
            <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">¿Cómo considera que es su situación económica actual?</label>
                        <select name="situacion" id="" class="form-control">
                            <option value="S">¿Cómo considera que es su situación económica actual?</option>
                            <option value="Muy buena">Muy buena</option>
                            <option value="Buena">Buena</option>
                            <option value="Regular">Regular</option>
                            <option value="Mala">Mala</option>
                            <option value="Muy mala">Muy mala</option>
                        </select>
                   
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">¿Cuáles son las comidas diarias que realiza?</label>
                        <select name="comidas" id="" class="form-control">
                            <option value="S">¿Cuáles son las comidas diarias que realiza el niño frecuentemente?</option>
                            <option value="Desayuno">Desayuno</option>
                            <option value="Almuerzo">Almuerzo</option>
                            <option value="Cena">Cena</option>
                            <option value="Merienda">Merienda</option>
                        </select>
                   
                </div>          
            </div>
            <br>
            <div class="row">   
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">¿Cómo considera que es la cantidad de esos alimentos?</label>
                        <select name="cantidad" id="" class="form-control">
                            <option value="S">¿Cómo considera que es la cantidad de esos alimentos?</option>
                            <option value="Demasiada">Demasiada</option>
                            <option value="Mucha">Mucha</option>
                            <option value="Regular">Regular</option>
                            <option value="Poca">Poca</option>
                            <option value="Muy poca">Muy poca</option>
                        </select>
                    
                </div>
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">¿Cómo considera que es la calidad de esos alimentos?</label>
                        <select name="calidad" id="" class="form-control">
                            <option value="S">¿Cómo considera que es la calidad de esos alimentos?</option>
                            <option value="Muy buena">Muy buena</option>
                            <option value="Buena">Buena</option>
                            <option value="Regular">Regular</option>
                            <option value="Mala">Mala</option>
                            <option value="Muy mala">Muy mala</option>
                        </select>
                    
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