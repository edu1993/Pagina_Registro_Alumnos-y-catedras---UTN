<!DOCTYPE html>
<html>
<head>
	<title>Nueva catedra</title>
</head>
<body>
	<h1>Ingreso datos nueva catedra</h1>
	<form action="../controller/controladorCargacatedra.php" method="post">
		<p>ingrese catedra</p>
		<input type="text" name="catedra" required="llenar" >
		<p>ingrese nombre del profesor</p>
		<input type="text" name="profesor" required="llenar"> 
		<p>ingrese dni del profesor </p>
		<input type="text" name="dni" required="llenar"> 
		<br>
		<input type="submit" name="IngresoCatedra" value="ENVIAR">

	</form>

</body>
</html>