<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Pelis</title>
		<script type="text/javascript" src="validacion.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		
</head>
<body style=" background-image: url('https://www.iscarnet.com/wp-content/uploads/2017/11/Background-2.png')">

	<?php
	include "header.php";
	?>
	
	<h2 style="text-align: center;color: #F68E0B;font-family:verdana;">Rellena este formulario para subir la pelicula que deseas</h2>
	<div style="display: flex;justify-content: center;align-items: center; height: 100px;">
		

<div style="border: 2px solid BLACK;width: 390px;height: 180px ;margin-top: 80px;border-radius: 5px;"> 

	<p id="mensaje2" class="mensaje2"></p>

<form method="POST" enctype="multipart/form-data" style="margin-top: 20px;" onsubmit="return Validacion2()" action="proyectoM7-2.php">

	<h3 style="margin-top: 5px;margin-bottom: 5px;float: left;margin-right:5px;margin-left: 5px; ">Titulo:	</h3><input type="Text" name="titulo" id="titulo" style="margin-top: 5px;"><br>

	<h3 style="margin-top: 5px;margin-bottom: 5px;float: left;margin-left: -58px;margin-right: 5px;">Fecha :	</h3><input type="date" name="fecha" id="fecha" style="margin-top: 5px;"><br>

    <label for="imagen"><h3 style="margin-top: 5px;margin-bottom: 5px;float: left;margin-left: -64px;">Imagen: </h3></label>
    <input type="file" name="imagen" id="imagen"  style="margin-top: 5px;"/>
    <br>
    <input type="submit" name="subir" value="Subir Imagen" style="margin-top: 10px;margin-left: 75px; margin-bottom: 5px;"/>
</form>
</div>
</div>






	

</body>
</html>