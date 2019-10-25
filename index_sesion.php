<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="validacion.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style=" background-image: url('https://www.iscarnet.com/wp-content/uploads/2017/11/Background-2.png')">

	<h1 style="text-align: center;margin-top: 40px;">Login</h1>

	<div style="display: flex;justify-content: center;align-items: center; height: 100px;">

	<div style="border: 2px solid BLACK;width: 380px;height:150px ;margin-top: 30px;border-radius: 5px;">

		<p id="mensaje" class="mensaje"></p>

	<form method="post" style="margin-top: 20px;margin-left: 50px;" onsubmit="return Validacion()" action="login.proc.php" >
		<h3 style="margin-top: 5px;margin-bottom: 5px;float: left;margin-right:5px;margin-left: 5px; ">Usuario: </h3><input type="text" name="user" id='user' placeholder="Inserta el usuario"  style="margin-top: 5px;"><br/>
		<h3 style="margin-top: 5px;margin-bottom: 5px;float: left;margin-right:5px;margin-left: -75px; ">Contraseña: </h3><input type="password" name="password" id='password' placeholder="Inserta el password" style="margin-top: 5px;"><br/><br/>
		<input type="submit" name="Enviar" style="margin-left: 110px; margin-bottom: 5px;">
	</form>

	</div>

	</div>

</body>
</html>