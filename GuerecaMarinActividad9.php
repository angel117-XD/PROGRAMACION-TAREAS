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
			font-size: 50px;
			color: white;
			text-align: center;
			

		}
	</style>

	<?php
	$num=rand(1,100);
	echo "el numero es: $num";
	echo '<p>';

	if ($num<=50){
		echo "el numero es menos de 50";

	}else{
		echo "el numero es mas de 50";

	}



	?>

</body>
</html>