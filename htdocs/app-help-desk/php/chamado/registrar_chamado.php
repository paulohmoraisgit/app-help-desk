<?php
	$arquivo_chamados = fopen('../../../../privatedocs/app-help-desk/arquivo_chamados.txt', 'a');
	
	session_start();
	$novo_chamado = $_SESSION['id'] . '|' . implode('|', $_POST) . PHP_EOL;
	
	fwrite($arquivo_chamados, $novo_chamado);
	fclose($arquivo_chamados);
	
	header('location: ../../home.php')
?>