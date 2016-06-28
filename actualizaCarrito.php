<?php
	session_start();
	if(isset($_SESSION["carrito"])){
		$numCarrito = $_SESSION["carrito"];
	} else {
		header("location:index.php");
		exit;
	}
	require_once("clases/db.php");
	require_once("clases/carrito.php");
	
?>