 <!DOCTYPE html>
<html>
<head>
	<title>Nueva catedra</title>
</head>
<body>
	<h1>Ingreso datos de nuevo alumno</h1>
	<form action="../controller/controladorCargaalumno.php" method="post">
		<p>ingrese nombre </p>
		<input type="text" name="nombre" required="llenar" >
		<p>ingrese dni</p>
		<input type="text" name="dni" required="llenar"> 
		<p>seleccione catedra</p>
		<?php
			echo " <select  name='materia' required>";
			foreach ($lista as $li) {
				if (!(empty($li))) {
					echo "<option value=".$li.">".$li."</option>";
				}
					
				
				
			}
			echo "  </select>";

			
			
		?>
		<br>
		<input type="submit" name="IngresoCatedra" value="ENVIAR">


	</form>

</body>
</html>