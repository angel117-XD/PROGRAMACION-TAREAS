<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FWS11 Ejercicio 3 Guereca Marin</title>
</head>
<body>
	<style type="text/css">
		body{
			color: white;
			background-color: black;
			font-family: inherit;
			text-align: left;
			border-collapse: collapse;
			font-size: 50px;
		}
	</style>

	<?php
  $equipo = array('portero'=> 'Gera', 'defensa' => 'Javier', 'medio' => 'buho', 'delantero' => 'Zaid');

    foreach ($equipo as $posicion => $jugador) {
    	echo "El jugador " . $jugador . " es el " . $posicion;
    	echo "<br>";
    }

	?>

</body>
</html>