<?php
    require '../model/usuario.php';
    require '../model/usuariosCrea.php';

    if (usuarios::existe($_POST['nick'])) {
    	echo "
				<script>
    				alert('el usuario que intenta crear ya existe ');
    				history.go(-1);
    			</script>

    	 ";

    }
    else{
    	$user= new Usuario($_POST['nick'],$_POST['pass'],$_POST['level'],$_POST['nombre'],$_POST['dni']);
    	$usuarios = new Usuarios();
    	$usuarios->addrRegistrado($user);
    	echo "
				<script>
    				alert('el usuario fue creado  ');
    				history.go(-1);
    				
    			</script>

    	 ";
    }
?>