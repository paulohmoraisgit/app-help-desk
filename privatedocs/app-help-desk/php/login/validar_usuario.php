<?php
	function validarUsuario ($usuario) {
		return validarEmail($usuario['email']) && validarSenha($usuario['senha']);
	}
	
	function validarEmail($email) {
		return $email == $_POST['email'];
	}
	
	function validarSenha($senha) {
		return $senha == $_POST['senha'];
	}
?>