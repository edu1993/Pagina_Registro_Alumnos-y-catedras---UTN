

<!DOCTYPE html>
<html>
<head>
	<title>Datos de la catedra</title>
</head>
<body>
<?php
		session_start();
	
		if (!isset($_SESSION['nick'])) {
			header('location:/index.php');
		}
?>

	<h1>Materia:<?php echo $catedra; ?></h1>
	<h2>Profesor :<?php echo $profesor; ?></h2>

	

</body>
</html>

