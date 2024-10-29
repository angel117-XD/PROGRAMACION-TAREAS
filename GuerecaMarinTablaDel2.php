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
			text-align: center;
			color: white;
			font-size: 50px;

		}
	</style>

	<?php
	echo "Tabla del 2 con el ciclo for";
	echo '<br>';
	for ($i=1; $i <=10 ; $i++) { 
		echo "$i x 2 = ".($i*2);
		echo '<br>';
			}
	?>

</body>
</html>