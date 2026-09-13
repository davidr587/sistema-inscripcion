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
    $gruposanguineo =$_GET["gruposanguineo"];
    $alergicoa=$_GET["alergicoa"];
    $tratamiento =$_GET["tratamiento"];
    $seguro =$_GET["seguro"];
    $seguroinstitucion=$_GET["seguroinstitucion"];
    $segurotlfn =$_GET["segurotlfn"];
    $parto = $_GET["parto"];  
    $operacion=$_GET["operacion"];
    $hospitalizacion =$_GET["hospitalizacion"];
    $diversidad = $_GET["diversidad"];
    $otrasenfe=$_GET["otrasenfe"];
    $lentes=$_GET["lentes"];
    $protesis =$_GET["protesis"];
    $tipoprotesis = $_GET["tipoprotesis"];  
    $medicamento=$_GET["medicamento"];
    $enfermedad =$_GET["enfermedad"];
    $enfermedadcual = $_GET["enfermedadcual"];
    $enfermedadafecta = $_GET["enfermedadafecta"];
    $informe = $_GET["informe"];
    $informemedicacion = $_GET["informemedicacion"];
    $informecual = $_GET["informecual"];
    $informeafecta = $_GET["informeafecta"];
    $discapacidad = $_GET["discapacidad"];
    $discapacidadtipo = $_GET["discapacidadtipo"];
    $conapdis = $_GET["conapdis"];
    $condicion = $_GET["condicion"];
    $condicioncual = $_GET["condicioncual"];
    $condicionafecta = $_GET["condicionafecta"];
    $informe2 = $_GET["informe2"];
    $informe2medica = $_GET["informe2medica"];
    $informe2cual = $_GET["informe2cual"];
    $dificultad = $_GET["dificultad"];
    $dificultadcual = $_GET["dificultadcual"];
    $vacunas = $_GET["vacunas"];
    $vacunaotra = $_GET["vacunaotra"];
    $observacion = $_GET["observacion"];

    if($boton=="Siguiente"){
      $consulta="INSERT INTO datosmedicos 
        (cedEst, gruposanguineo, alergicoa, tratamiento, seguro, seguroinstitucion, segurotlfn, parto, operacion, hospitalizacion, diversidad, otrasenfe, lentes, protesis, tipoprotesis, medicamento, enfermedad, enfermedadcual, enfermedadafecta, informe, informemedicacion, informecual, discapacidad,discapacidadtipo, conapdis, condicion, condicioncual, condicionafecta, informe2, informe2medica, informe2cual, dificultad, dificultadcual, vacunas, vacunaotra, observacion) 
        VALUES 
        ('$cedEst', '$gruposanguineo', '$alergicoa', '$tratamiento', '$seguro', '$seguroinstitucion', '$segurotlfn', '$parto', '$operacion', '$hospitalizacion', '$diversidad', '$otrasenfe', '$lentes', '$protesis', '$tipoprotesis', '$medicamento', '$enfermedad', '$enfermedadcual', '$enfermedadafecta', '$informe', '$informemedicacion', '$informecual', '$discapacidad', '$discapacidadtipo', '$conapdis', '$condicion', '$condicioncual', '$condicionafecta', '$informe2', '$informe2medica', '$informe2cual', '$dificultad', '$dificultadcual', '$vacunas', '$vacunaotra', '$observacion')";
        $resultado = $obj_conexion -> query($consulta)|| die("Datos de Usuario");
        if($resultado)
        {
          echo "<script>window.location='datossocioeconomicos.php?cedEst=$cedEst'</script>";
          }
          else
          {
            echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos de Estudiante No Almacenados Correctamente",type:"danger"},
            function(isConfirm){location.href="datosmedicos.php";});}, 100);</script>';
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
            <h6>Registro de Datos Medicos</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Datos </span>medicos del estudiante
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
                    <label class="etiquetastec">Grupo Sanguineo</label>
                       <select name="gruposanguineo" id="" class="form-control">
                            <option value="S">Seleccione Grupo Sanguineo</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
              
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Alergias</label>
                          <input type="text" class="form-control" name="alergicoa" placeholder="Es alérgico a">
                   
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Tratamiento</label>
                          <input type="text" class="form-control" name="tratamiento" placeholder="Tratamiento">
                    
                </div>
            </div>  
            <br>
             <div class="row">   
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Seguro Medico</label>
                       <select name="seguro" id="" class="form-control">
                            <option value="S">Tiene Seguro Medico</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Institución</label>
                          <input type="text" class="form-control" name="seguroinstitucion" placeholder="Institución">
                    
                </div>
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Teléfono de Institución</label>
                          <input type="text" class="form-control" name="segurotlfn" placeholder="Teléfono de Institución">
                   
                </div>
            </div> 
            <br>
            <div class="row">
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Tipo de Parto</label>
                        <select name="parto" id="" class="form-control">
                            <option value="S">El parto fue</option>
                            <option value="Natural">Natural</option>
                            <option value="Fórceps">Fórceps</option>
                            <option value="Cesárea">Cesárea</option>
                            <option value="Antes de tiempo">Antes de tiempo</option>
                            <option value="A termino">A termino</option>
                         </select>
                   
                </div> 
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Complicaciones</label>
                    <input type="text" class="form-control" name="complicacion" placeholder="Complicaciones">
                    </div>
                
            </div>  
            <br>
            <div class="row">
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Operaciones</label>
                        <input type="text" class="form-control" name="operacion" placeholder="Operaciones">
                    
                </div> 
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Hospitalización</label>
                      <input type="text" class="form-control" name="hospitalizacion" placeholder="Hospitalización">
                    
                </div> 
            </div> 
            <br>
            <div class="row">
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Presenta alguna diversidad</label>
                        <select name="diversidad" id="" class="form-control">
                            <option value="S">Presenta alguna diversidad o enfermedad que requiera atención médica</option>
                            <option value="Visual">Visual</option>
                            <option value="Auditiva">Auditiva</option>
                            <option value="Motora">Motora</option>
                            <option value="Lenguaje">Lenguaje</option>
                            <option value="Emocional">Emocional</option>
                            <option value="Odontológica">Odontológica</option>
                         </select>
                    
                </div> 
                <div class="col-lg-6 col-6">
                    <label class="etiquetastec">Otras</label>
                      <input type="text" class="form-control" name="otrasenfe" placeholder="Otras">
                    </div>
               
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Lentes correctivos</label>
                        <select name="lentes" id="" class="form-control">
                            <option value="S">Usa lentes correctivos</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                         </select>
                    
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Prótesis</label>
                        <select name="protesis" id="" class="form-control">
                            <option value="S">Usa Prótesis</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                         </select>
                   
                </div> 
                <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Tipo de prótesis</label>
                        <input type="text" class="form-control" name="tipoprotesis" placeholder="Tipo de prótesis">
                    </div>
            
            </div>
            <br>
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Medicamento</label>
                        <input type="text" class="form-control" name="medicamento" placeholder="¿Qué medicamento autoriza usar en caso de dolor o fiebre?">
                    </div>
               
            </div> 
            <br>
             <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Enfermedad física/ orgánica</label>
                        <select name="enfermedad" id="" class="form-control">
                            <option value="S">Tiene alguna enfermedad física/ orgánica</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                 
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Cuál?</label>
                        <input type="text" class="form-control" name="enfermedadcual" placeholder="¿Cuál?">
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">En que le afecta</label>
                        <input type="text" class="form-control" name="enfermedadafecta" placeholder="En que le afecta">
              
                </div> 
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Tiene informe médico</label>
                        <select name="informe" id="" class="form-control">
                            <option value="S">Tiene informe médico</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Toma medicación permanente para ello</label>
                        <select name="informemedicacion" id="" class="form-control">
                            <option value="S">Toma medicación permanente para ello</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Cuál?</label>
                        <input type="text" class="form-control" name="informecual" placeholder="¿Cuál?">
                  
                </div> 
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Posee algún tipo de discapacidad</label>
                        <select name="discapacidad" id="" class="form-control">
                            <option value="S">Posee algún tipo de discapacidad certificada</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Tipo</label>
                        <input type="text" class="form-control" name="discapacidadtipo" placeholder="Tipo">
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Código Conapdis</label>
                        <input type="text" class="form-control" name="conapdis" placeholder="Código Conapdis">
                   
                </div> 
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Tiene alguna condición psicológica/pedagógica?</label>
                        <select name="condicion" id="" class="form-control">
                            <option value="S">¿Tiene alguna condición psicológica/pedagógica?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Cuál?</label>
                        <input type="text" class="form-control" name="condicioncual" placeholder="¿Cuál?">
                   
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">En que le afecta</label>
                        <input type="text" class="form-control" name="condicionafecta" placeholder="En que le afecta">
                   
                </div> 
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Tiene informe médico</label>
                        <select name="informe2" id="" class="form-control">
                            <option value="S">Tiene informe médico</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
              
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Toma medicación permanente para ello</label>
                        <select name="informe2medica" id="" class="form-control">
                            <option value="S">Toma medicación permanente para ello</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                  
                </div> 
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">¿Cuál?</label>
                        <input type="text" class="form-control" name="informe2cual" placeholder="¿Cuál?">
                  
                </div> 
            </div> 
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Presenta dificultad en el aprendizaje</label>
                        <select name="dificultad" id="" class="form-control">
                            <option value="S">Presenta dificultad en el aprendizaje</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                   
                </div> 
              <div class="col-lg-8 col-8">
                    <label class="etiquetastec">Especifique</label>
                        <input type="text" class="form-control" name="dificultadcual" placeholder="Especifique">
                   
                </div> 
            </div>
            <br>
            <div class="row">
              <div class="col-lg-4 col-4">
                    <label class="etiquetastec">Vacunas recibidas</label>
                        <select name="vacunas" id="" class="form-control">
                            <option value="S">Vacunas recibidas</option>
                            <option value="BCG">BCG</option>
                            <option value="Polio">Polio</option>
                            <option value="Bivalente">Bivalente</option>
                            <option value="Triple">Triple</option>
                            <option value="Hepatitis">Hepatitis</option>
                            <option value="Rubéola">Rubéola</option>
                            <option value="Antitetánica">Antitetánica</option>
                            <option value="Antigripal">Antigripal</option>
                            <option value="Fiebre Amarilla">Fiebre Amarilla</option>
                            <option value="Meningitis">Meningitis</option>
                            <option value="Sarampión">Sarampión</option>
                            <option value="Neumococo">Neumococo</option>
                            <option value="Sarampión">Covid19</option>
                        </select>
                
                </div> 
              <div class="col-lg-8 col-8">
                    <label class="etiquetastec">Otra Especifique</label>
                        <input type="text" class="form-control" name="vacunaotra" placeholder="Otra Especifique">
                  
                </div> 
            </div>
            <br>
            <div class="row">
              <div class="col-lg-12 col-12">
                    <label class="etiquetastec">Observaciones</label>
                        <input type="text" class="form-control" name="observacion" placeholder="Observaciones">
                  
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