<!DOCTYPE html>
<html>
<head>
	<title>Ingreso de  usuario </title>
</head>
<body>

	<form action="../controller/controladorCreaUsuario.php" method="post">
		<p>Ingrese nick</p>
		<input type="text" name="nick" required="">
		<p>Ingrese password</p>
		<input type="text" name="pass" required="">
		<p>Ingrese nivel de acceso</p>
		<select name="level">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
		</select>
		<p>Ingrese nombre</p>
		<input type="text" name="nombre" required="">
		<p>Ingrese dni</p>
		<input type="number" name="dni" required="">
		<br>
		<input type="submit" name="enviar" value="Enviar">

	</form>

</body>
</html>
