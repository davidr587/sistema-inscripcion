<?php 
  error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
  date_default_timezone_set("America/Caracas");

  $usuario="root";
  $contraseña="";
  $basedatos="escuelatecnica";
  $servidor="localhost";
  
  $obj_conexion = mysqli_connect($servidor,$usuario,$contraseña,$basedatos);


  
  if ($obj_conexion) {
    mysqli_set_charset($obj_conexion,"utf8");
    return $obj_conexion;
}
else{
    return null;
}
?>