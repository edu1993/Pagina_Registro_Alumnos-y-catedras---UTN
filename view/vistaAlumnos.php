<?php
		session_start();
	
		if (!isset($_SESSION['nick'])) {
			header('location:/index.php');
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Datos de los alumnos</title>
</head>
<body>
	<h1>Materia:<?php echo $catedra; ?></h1>
	<h2>Profesor :<?php echo $profesor; ?></h2>
	<h4>Listado de alumnos</h4>
	<?php
	if(!(empty($alumnos))){
		echo "<table border=10px>"; 	
 		echo "<tr>"."<td>Nombre</td>"."<td>Dni</td>"."</tr>";

 	
			foreach ($alumnos as $al) {
  				echo "<tr>";
  				echo "<td>".$al->get_nombre()."</td>";
  				echo "<td>".$al->get_dni()."</td>";
  				echo "<tr>";
  		}
  		echo "</table>";
	}
	else{
		echo "<h1>no cuenta con alumnos registrados</h1>";
	}


  		?>




</body>
</html>
