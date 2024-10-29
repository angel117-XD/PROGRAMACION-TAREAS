<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FWS11 RETO1 Guereca Marin</title>
</head>
<body>
	<style type="text/css">
		body{
			color: white;
			background-color: black;
			border-collapse: collapse;
			text-align: left;
			font-family: inherit;
			font-size: 30px;
		}
	</style>

	<?php
	$array =  range(1, 100);

	for ($i=0; $i < count($array) ; $i++) { 
		if($array [$i] % 2 == 0){
			echo $array[$i] . "\n";
			echo "<br>";
		}
		// code...
	}

	?>

</body>
</html>