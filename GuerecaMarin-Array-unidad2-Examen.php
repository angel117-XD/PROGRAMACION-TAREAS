<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EXAMEN UNIDAD2 GUERECA MARIN</title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: black;
			color: white;
			text-align: left;
			tab-size: 30px;
			font-family: inherit;
			font-size: 30px;

		}
		table{
			background-color: rgb(168, 255, 255);
			font-family: fantasy;
			color: rgb(0, 127, 255);
			width: 1200px;
			margin-top: 10%;
			margin-left: 10%;
			margin-bottom: 10%;
		}
	</style>

	<?php 
    //CREAMOS EL ARRAY//
	$array = array("Chevrolet Camaro 1979" => "100000", "Dodge Charger 1969" => "75000", "Jeep Rubicon 2003" => "150000", "Kawasaki Ninja 2012" => "120000", "Tsuru" => "20000", "Bocho" => "25000");

    //ASOCIAMOS EL AUTO AL PRECIO//
	foreach($array as $carro => $precio) {
		echo " El carro " . $carro. " cuesta: ". $precio ."<br>";
		echo "<p>";
	}

   

	
	
	//HACEMOS LA PRIMERA TABLA ESTANDO DESORDENADA//
	   echo '<table border = 5>
	   <tr>
	      <th> Autos </th>
	      <th> Precio </th>
	   </tr>';

	   foreach ($array as $carro => $precio) {
	   	echo '<tr>';
	   	echo '<td>' . htmlspecialchars($carro) . '</td>'; //INVESTIGUE Y DESCUBRI QUE SE PUEDE USAR HTMLSPECIALCARS PARA VARIABLES// 
	   	echo '<td>' . htmlspecialchars($precio) . '</td>';
	   	echo '</tr>';
	   }
	   echo '</table>';


	   //HACEMOS LA SEGUNDA TABLA ORDENADA//
	   arsort($array); // Ordenamos de mayor a menor por precio

        echo '<h2>Autos ordenados de mayor a menor según el precio:</h2>';
        echo '<table border="5">
        <tr>
           <th>Autos</th>
           <th>Precio</th>
        </tr>';

foreach ($array as $carro => $precio) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($carro) . '</td>';
    echo '<td>' . htmlspecialchars($precio) . '</td>';
    echo '</tr>';
}
echo '</table>';




	
	 ?>

</body>
</html>