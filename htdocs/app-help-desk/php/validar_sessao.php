<?php
	if(session_status() != 2) session_start();
	
	if (!isset($_SESSION['autenticado'])) {
		header('location: ./index.php');
		die();
	}
?>