<!DOCTYPE html>
<html>
<head>
	<title>Lista materias</title>
</head>
<body>
	<h2>Selecione Catedra:</h2>
	<?php
		foreach ($materias as $linea ) {
		echo "<a href='../controller/controlador.php?seleccion=".$seleccion."&materia=".$linea."'>".$linea."</a> <br>";
		echo "<br>";
	
		}
	

	?>
	


</body>
</html>