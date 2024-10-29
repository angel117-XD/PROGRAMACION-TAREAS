
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FWS11 RETO3 Guereca Marin
	</title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: black;
			border-collapse: collapse;
			font-family: inherit;
			text-align: left;
			font-size: 50px;
			color: white;

		}
	</style>

	<?php
	$nombres = array(" Angel", " Alejandro", " Alexander", " Aaron", " Luis", " Sebastian", " Dante", " Evan ");

	$nombre = " Angel";

	echo "Nombre: " . $nombre . ", ";

	$XD = count($nombres);

	//RECORREMOS EL ARRAY//
	$encontrado = false; //VARIABLE PARA SABER SI SE HA ENCONTRADO EL NOMBRE//
	foreach ($nombres as $nombreArray) {
		if($nombre === $nombreArray){
			$encontrado = true; //MARCAMOS QUE ENCONTRAMOS EL NOMBRE//
			break;//SALIMOS DEL CICLO//
		}
	}

	//MOSTRAMOS EL MENSAJE DE QUE SE ENCONTRO EL NOMBRE//
	if ($encontrado){
		echo "Este nombre esta en el array";
		echo "<br>";
	}else{
		echo "Este nombre no esta en el array";
		echo "<br>";
		// code...
	}

	?>

</body>
</html>