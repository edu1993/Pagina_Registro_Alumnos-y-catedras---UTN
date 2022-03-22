<?php
require 'model/usuario.php';
require 'model/usuarios.php';


if (isset($_COOKIE['nick'])) {
	$usuarios= new Usuarios();
	$user = $usuarios->recuperarArchivo($_COOKIE['nick']);
	$user->recuperarSesion();

	require 'view/home.php';
}
else{
	$user = new Usuario($_POST['nick'],$_POST['pass'],1,"x","x");
	$usuarios= new Usuarios();

	if ($usuarios->autenticar($user)) {
		$user = $usuarios->recuperarArchivo($user->get_nick());
		$user->recuperarSesion();
		$user->guardarCookie();
		require 'index.php';
	}	
	else{
	  	echo "
				<script>
    				alert('usuario o contraseña no validas ');
    				history.go(-1);
    			</script>

    	 ";
}
 
}


?>
