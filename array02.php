<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FWS11 Ejercicio2 Guereca Marin</title>
</head>
<body>
	<style type="text/css">
		body{
			color: white;
			background-color: black;
			border-collapse: collapse;
			text-align: left;
			font-family: inherit;
			font-size: 50px;

		}
	</style>

	<?php

	$nombre = "Anna";
	$array = array(1, 2, 3, "casa", $nombre);

	//se obtiene el numero de elementos//
	$longitud = count($array);

	//recorre todos los elementos//
	for ($i=0; $i < $longitud ; $i++) { 
		//se obtiene el valor de cada elemento//
		echo $array [$i];
		echo "<br>";
	}

	?>

</body>
</html>