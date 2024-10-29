<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Examen1 Guereca Marin</title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: black;
			font-family: cursive;
			font-size: 50px;
			color: white;
			
		}
	</style>
	<?php

	$Empleado = "juan";
	$Ventas = rand(500,7000);
	$Sueldo = rand(100,500);
	$Comision;
	$SueldoTotal;

	if ($Ventas >= 1000) {
		$Comision = ($Ventas*.07);
		// code...
	}else{
		$Comision = ($Ventas*.03);
	}
	$SueldoTotal = $Sueldo+$Comision;

	echo "Empleado: $Empleado";
	echo '<br>';
	echo "Ventas: $Ventas";
	echo '<br>';
	echo "Comision: $Comision";
	echo '<br>';
	echo "Sueldo Total: $SueldoTotal";


	?>
</body>
</html>