<?php
	session_start();
	
	header('location: ' . (!isset($_SESSION['autenticado']) ? 'login.php' : 'home.php'));
	die();
?>