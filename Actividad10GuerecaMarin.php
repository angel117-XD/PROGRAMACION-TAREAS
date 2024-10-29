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
			font-size: 50px;
			text-align: center;

		}
	</style>


	<?php
	$calif1=rand(1,10);
	$calif2=rand(1,10);
	$calif3=rand(1,10);
    $promedio=($calif1+$calif2+$calif3)/3;

	echo "promedio: $promedio";
	echo '<p>';

	if ($promedio <=6){
		echo "El alumno reprobo";
	}else{
		echo "El alumno aprobo";
	}

	?>

</body>
</html>