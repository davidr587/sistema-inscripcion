<?php
  error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
  date_default_timezone_set("America/Caracas");

    include('conexion.php');
	$cedPersonal = $_GET['cedPersonal'];

    $consulta2="DELETE FROM personal WHERE cedPersonal='$cedPersonal'";
    $resultado2 = $obj_conexion -> query($consulta2)|| die("Error");
    if($resultado2)
  {
     echo "<script>alert('Personal Eliminado')</script>";
	 echo "<script>window.location='listado_personal.php'</script>";
  }
  else
  {
    echo '<script>setTimeout(function(){swal({title:"Ha Ocurrido un Error!!!",text:"Datos No ELiminados Correctamente",type:"danger"},
    function(isConfirm){location.href="listado_personal.php";});}, 100);</script>';
  }
?>