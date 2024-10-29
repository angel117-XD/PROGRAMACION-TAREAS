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
			color: white;
			background-color: black;
			text-align: left;
			font-family: inherit;
			font-size: 40px;
		}
	</style>

	<?php
	$art1= "Sabritas";
	$art2= "Galletas";
	$art3= "Refresco";

	$precio1= rand(50, 3000);
	$precio2= rand(50, 3000);
	$precio3= rand(50, 3000);

	$Compra= ($precio1+$precio2+$precio3);	

	$descuento;

	if ($Compra >= 5000){
		$descuento= ($Compra*.10);
	}else{
		$descuento= ($Compra*.05);
	}
	$CompraTotal= $Compra-$descuento;

	echo "$art1 $$precio1 bolivares";
	echo '<br>';
	echo "$art2 $$precio2 bolivares";
	echo '<br>';
	echo "$art3 $$precio3 bolivares";
	echo '<p>';

	echo "Subtotal: $$Compra";
	echo '<br>';
	echo "Descuento: $$descuento";
	echo '<p>';
	echo "Total: $$CompraTotal";

	?>

</body>
</html>