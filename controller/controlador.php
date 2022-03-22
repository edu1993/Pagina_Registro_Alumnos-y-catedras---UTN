<?php
require_once '../model/Catedra.php';
require_once '../model/Persona.php';
require_once '../model/materias.php';
//ver catedra*********************************************************************
if ($_GET['seleccion']=="vistaCatedra") {

		if ($_GET['materia']=="null") {
			$seleccion=$_GET['seleccion'];
			$materias = Materias::lista();
			require_once '../view/selectores/listaMaterias.php';

		}
		else{
			$Catedra= new Catedra("x","x","x",0);
			$Catedra->recuperarCatedra($_GET['materia']);
			$catedra=$Catedra->get_catedra();
			$profesor=$Catedra->get_profesor();
			require_once '../view/vistaCatedra.php';

		}



}

//*****************************************************************************************

//ver alumnos*********************************************************************

if ($_GET['seleccion']=="vistaAlumnos") {

		if ($_GET['materia']=="null") {
			$seleccion=$_GET['seleccion'];
			$materias = Materias::lista();
			require_once '../view/selectores/listaMaterias.php';

		}
		else{
			$Catedra= new Catedra("x","x","x",0);
			$Catedra->recuperarCatedra($_GET['materia']);
			$catedra=$Catedra->get_catedra();
			$profesor=$Catedra->get_profesor();
			$alumnos=$Catedra->get_alumnos();
			require_once '../view/vistaAlumnos.php';

		}



}

//*****************************************************************************************
if ($_GET['seleccion']=="nuevaCatedra") {
				require_once '../view/nuevaCatedra.php';
}

//********************************************************************************************

if ($_GET['seleccion']=="agregarAlumno") {

				$lista = Materias::lista();
				array_filter($lista);
				require_once '../view/nuevoAlumno.php';
}

//************************************************************************************************
if ($_GET['seleccion']=="crearUsuario") {
				require_once '../view/nuevoUsuario.php';
}
//**********************************************************************************************

//************************************************************************************************


?>
