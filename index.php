<?php
header("Cache-Control:no cache");


	if (isset($_COOKIE['nick'])) {
			include_once 'controller/controladorusuario.php';
	}

	else{
			if (isset($_SESSION['nick'])) {  //Comprueba si existe una sesion
			include_once 'view/home.php';
			}

			elseif (isset($_POST['nick'])) {

					include_once 'controller/controladorusuario.php';
			}

			else{

			include_once 'view/login.php';
			}

	}

	
?>
