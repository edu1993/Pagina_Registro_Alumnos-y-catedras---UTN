<?php
require_once '../model/Catedra.php';
require_once '../model/Persona.php';


$Catedra= new Catedra("x","x","x",0);
$Catedra->recuperarCatedra($_POST['materia']);
$alumno = new Persona($_POST['nombre'],$_POST['dni']);
$Catedra-> addAlumno($alumno);
	echo "alumno asignado /redirecionamiento no creado ";
?>
