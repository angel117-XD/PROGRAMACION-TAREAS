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
    $calif=rand(1,10);

    echo "calificacion: $calif";
    echo'<p>';

    if ($calif>=6){
    	echo "Alumno Aprobado";
    }else{
    	echo"Alumno Reprobado";
    }


	?>



</body>
</html>