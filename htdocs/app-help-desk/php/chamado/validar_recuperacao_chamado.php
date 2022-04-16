<?php
	function validarRecuperacaoChamado($chamado) {
		return (!$chamado[0] || 
			$_SESSION['acesso'] == 'user' && $_SESSION['id'] != $chamado[0]
		);
	}
?>