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
			color: white;
			font-family: cursive;
			text-align: left;
			font-size: 20px;
		}
	</style>

	<?php
	$valor = rand(1,100);
	$inicio =1;
	echo "valor: $valor";
	echo '<p>';
	echo "contador: $inicio";
	echo '<p>';
	do {
		echo $inicio, '<br>';
		$inicio ++;
		
		// code...
	} while ($inicio <= $valor);
	
	?>          
</body>
</html>