<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	 <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f4f4f4;  
            margin: 0;  
            padding: 20px;  
        }  
        .form-container {  
            background-color: #fff;  
            border-radius: 5px;  
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  
            padding: 20px;  
            max-width: 400px;  
            margin: auto;  
        }  
        label {  
            display: block;  
            margin: 10px 0 5px;  
        }  
        input[type="text"],  
        select {  
            width: 100%;  
            padding: 10px;  
            margin-bottom: 10px;  
            border: 1px solid #ccc;  
            border-radius: 4px;  
        }  
        input[type="radio"],  
        input[type="checkbox"] {  
            margin-right: 5px;  
        }  
        input[type="submit"] {  
            background-color: #28a745;  
            color: white;  
            border: none;  
            padding: 10px;  
            border-radius: 4px;  
            cursor: pointer;  
            width: 100%;  
        }  
        input[type="submit"]:hover {  
            background-color: #218838;  
        }  
    </style>  

	<div class="form-container">
		<form>
			<label>Nombre</label><br>
			<input type="text" name="txtnombre" placeholder="Nombre Completo"><br><br>

			<label>Estado Civil</label><br>
			<select name="cboEstadocivil" title="Estado Civil">
				<option value="Casado" selected="select">Casado</option>
				<option value="Soltero" selected="select">Soltero</option>  
                <option value="Divorciado" selected="select">Divorciado</option>  
            </select><br><br>  
            <label>  
            <input type="radio" name="rsexo" value="Hombre">Hombre  
            </label>  
            <label>  
            <input type="radio" name="rsexo" value="Mujer">Mujer  
            </label>  
            <input type="checkbox" name="chkpublicidad">Deseo recibir publicidad<br>  
            <input type="submit" name="enviar" value="enviar">  
        </form>  
    </div>  
</body>
</html>