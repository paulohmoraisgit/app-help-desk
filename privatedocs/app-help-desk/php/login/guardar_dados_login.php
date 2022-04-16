<?php
	function guardarDadosLogin($usuario) {
			session_start();		

			$_SESSION['autenticado'] = true;
			$_SESSION['id'] = $usuario['id'];
			$_SESSION['acesso'] = $usuario['acesso'];
	}
?>