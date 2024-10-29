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
			text-align: center;
			font-size: 100px;

		}
	</style>

	<?php
	$dia=date("d");
	$fecha=date("d/m/y");

	echo "$fecha";
	echo '<p>';

	if ($dia<=25){
		echo "sitio activo";

	}else {
		echo "sitio fuera de servicio";

	}
	




	?>

</body>
</html>