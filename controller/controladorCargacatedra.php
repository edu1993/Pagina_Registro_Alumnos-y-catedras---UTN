<?php
require_once '../model/Catedra.php';
require_once '../model/materias.php';

if (Materias::existe($_POST['catedra'])) {
	echo "<script type='text/javascript'>alert('LA MATERIA QUE ESTA INTENTANDO CREAR YA SE ENCUENTRA EN EXISTENCIA')</script>";
	require_once '../view/nuevaCatedra.php';
}
else
{

	$profesor= $_POST['profesor'];
	$catedra= $_POST['catedra'];
	$dni = $_POST['dni'];
	$c=new Catedra($catedra,$profesor,$dni,1);
	
	echo "<script type='text/javascript'>
			alert('materia creada ');
	</script>";


}


?>
