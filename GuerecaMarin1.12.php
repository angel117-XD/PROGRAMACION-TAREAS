<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: black;
			font-family: cursive;
			color: white;
			text-align: left;
			font-size: 40px;

		}
	</style>

	<?php
	$empleado = "Juan Perez";
	$sueldo = rand (10000, 20000);
	$antiguedad = rand(0,10);
	$aumento = ($sueldo*.20);
	$SueldoTotal;

	echo "Empleado: $empleado";
	echo '<br>';
	echo "Sueldo: $sueldo.mxn";
	echo '<br>';
	echo "antiguedad: $antiguedad años";
	echo '<br>';

	if ($antiguedad > 5){
		$SueldoTotal= $sueldo+$aumento;
		echo "Aumento: 20%";
		echo '<br>';	
	}else{
		$SueldoTotal= $sueldo;
		echo "Aumento: 0%";
		echo '<br>';
	}
	    echo "Sueldo Total: $SueldoTotal";
	?>

</body>
</html>