<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FWS12 EJERCICIO1 Guereca Marin</title>
</head>
<body>
	<style type="text/css">
		body{
			color: white;
			background-color: black;
			border-collapse: collapse;
			font-family: inherit;
			text-align: left;
			font-size: 30px;
		}
	</style>

	<?php
	$array_numerico_indexado = array(1, "Gato", 2, "Perro");
	foreach ($array_numerico_indexado as $mascota) {
		echo $mascota . " <br>";
	}
	array_push($array_numerico_indexado, 3, "Caballo", 4, "Hamster");

	foreach ($array_numerico_indexado as $mascota) {
		echo $mascota . " <br>";
	}

	?>

</body>
</html>