<?php 
	require_once('Cabeçalho.php');
	unset($_SESSION["email"]);
	header("location: FormLogin.php");
?>