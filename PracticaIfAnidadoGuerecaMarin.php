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
			text-align: center;
			color: white;
			background-color: black;
			font-family: cursive;
			font-size: 50px;
		}
	</style>

	<?php
	$val1=rand(0,100);
	$val2=rand(0,100);
	$val3=rand(0,100);
	echo "Primer Numero: ".$val1;
	echo '<p>';
	echo "Segundo Numero: ".$val2;
	echo '<p>';
	echo "Tercer Numero: ".$val3;
	echo '<p>';

	if ($val1 <= $val2 && $val1>=$val2){
		echo "El mayor es el primer numero ".$val1;
		echo '<p>';

	}elseif ($val2 <= $val1 && $val2>=$val1) {
		echo "El mayor es el segundo numero ".$val2;
		echo '<p>';
		// code...
	}else{
		echo " El mayor es el tercer numero ".$val3;
		echo '<p>';
		// code...
	}

	if ($val1>=$val2 && $val2<=$val1) {
		echo "El menor es el primer numero ".$val1;
		echo '<p>';
	}elseif ($val2>=$val1 && $val1<=$val2) {
		echo "EL menor es el segundo numero ".$val2;
		echo '<p>';
	}else{
		echo "El menor es el tercer numero ".$val3;
		echo '<p>';
	}	

	?>

</body>
</html>