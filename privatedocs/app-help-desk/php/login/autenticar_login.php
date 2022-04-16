<?php
	require_once '../../../../privatedocs/app-help-desk/php/lista_usuarios.php';
	require_once '../../../../privatedocs/app-help-desk/php/login/validar_usuario.php';
	require_once '../../../../privatedocs/app-help-desk/php/login/guardar_dados_login.php';

	foreach($listaUsuarios as $usuario) {
		if(validarUsuario($usuario)) {
			guardarDadosLogin($usuario);
			
			header('location: ../../home.php');
			die();

			break;
		} else header('location: login.php?login=erro');
	}
?>