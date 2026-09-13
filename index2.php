<?php
include "Conexion.php";
$db =  connect();


function connect(){
	return new mysqli("localhost","root","","clinicadelaire");
}

$query=$db->query("select * from departamento");
$countries = array();
while($r=$query->fetch_object()){ $countries[]=$r; }



?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</head>
<body>

<form method="post" action="Agregar.php?opt=all">
  <div class="form-group">
    <label for="name1">departamento</label>
    <select id="departamento_id" class="form-control" name="departamento_id" required>
      <option value="">-- SELECCIONE --</option>
<?php foreach($countries as $c):?>
      <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
<?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="name1">provincia</label>
    <select id="provincia_id" class="form-control" name="provincia_id" required>
      <option value="">-- SELECCIONE --</option>
   </select>
  </div>

  <div class="form-group">
    <label for="name1">distrito</label>
    <select id="distrito_id" class="form-control" name="distrito_id" required>
      <option value="">-- SELECCIONE --</option>
   </select>
  </div>


</form>




<script type="text/javascript">
	$(document).ready(function(){
		$("#departamento_id").change(function(){
			$.get("Provincias.php","departamento_id="+$("#departamento_id").val(), function(data){
				$("#provincia_id").html(data);
				console.log(data);
			});
		});

		$("#provincia_id").change(function(){
			$.get("Distritos.php","provincia_id="+$("#provincia_id").val(), function(data){
				$("#distrito_id").html(data);
				console.log(data);
			});
		});
	});
</script>

</body>
</html>