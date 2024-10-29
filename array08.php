<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FWS12 EJERCICIO2 Guereca Marin</title>
</head>
<body>
	<style type="text/css">
		body{
			color: white;
			background-color: black;
			border-collapse: collapse;
			font-family: inherit;
			font-size: 20px;
			text-align: left;
		}
		
	</style>

	<?php
	$arrayNumerico = array(range(1, 50));
	//LE HICE UNA PEQUEÑA MODIFICACION AQUI☝☝☝//

	//ORDEN ASCENDENTE//
	sort($arrayNumerico);
	var_export($arrayNumerico);

	echo "<p>";

	//ORDEN DESCENDENTE//
	rsort($arrayNumerico);
	var_export($arrayNumerico);

	?>

</body>
</html>