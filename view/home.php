
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pagina principal</title>
</head>
<body>
	<?php

			echo "usuario: ".$_SESSION['nick']."<br>";
			if ($_SESSION['level']=="0") {
				echo "<a href='controller/controlador.php?seleccion=crearUsuario'>Agregar usuario</a><br>";
			}
				if ($_SESSION['level']=="0"||$_SESSION['level']=="1") {
					echo "<a href='controller/controlador.php?seleccion=nuevaCatedra'>Crear una nueva cátedra</a><br>";
					echo "<a href='controller/controlador.php?seleccion=agregarAlumno'>Agregar un alumno</a><br>";
			}
			

			echo "<a href='controller/controlador.php?seleccion=vistaCatedra&materia=null'>Ver datos de cátedra</a> <br>";
			echo "<a href='controller/controlador.php?seleccion=vistaAlumnos&materia=null'>Listar datos de alumnos</a><br>";
		


	?>





</html>
