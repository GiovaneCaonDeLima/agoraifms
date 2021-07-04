<?php 
	require_once('Cabeçalho.php');
	session_destroy();
	// unset($_SESSION["email"]);
	header("location: FormLogin.php");
?>