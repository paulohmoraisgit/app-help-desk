<?php
	require_once './php/chamado/validar_recuperacao_chamado.php';
	
	$arquivo_chamados = fopen('../../privatedocs/app-help-desk/arquivo_chamados.txt', 'r');
	$chamados = [];
	
	while(!feof($arquivo_chamados)) {
		$chamado = fgets($arquivo_chamados);
		$chamado = explode('|', $chamado);

		if(validarRecuperacaoChamado($chamado)) continue;
		array_push($chamados, $chamado);
	}

	fclose($arquivo_chamados);
?>