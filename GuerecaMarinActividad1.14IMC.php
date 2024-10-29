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
			text-align: left;
			color: white;
		}
	</style>

	<?php

	$altura=rand(150,200);
	$peso=rand(40,100);
	$ALTURA= $altura/100;

	$IMC= $peso/($ALTURA*$ALTURA);

	    echo "peso: $peso";
	    echo'<p>';
	    echo "altura: $altura";
	    echo '<p>';

	if ($IMC<18.5){
		echo "Su IMC es de ".$IMC ;
		echo '<br>';
		echo " usted tiene un Peso Bajo";
	}elseif ($IMC>=18.5 && $IMC<25) {
		echo "Su IMC es de ".$IMC;
		echo '<br>';
		echo " usted tiene un Peso Normal";
	}elseif ($IMC>=25 && $IMC<30) {
		echo "Su IMC es de ".$IMC;
		echo '<br>';
		echo " usted tiene un Sobrepeso";
	}elseif ($IMC>=30) {
		echo "Su IMC es de ".$IMC;
		echo '<br>';
		echo " usted tiene Obesidad";
		// code...
	}

	?>

</body>
</html>