<?php
include("php/conn.php");
if(isset($_POST["usuario"]) && isset($_POST["clave"])){
	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];
	if($usuario=="" || $clave==""){
		header("location:login.php?e=1");
		exit;
		//print "Todos los campos son requeridos";
	} else {
		$q = "SELECT * FROM usuarios WHERE usuario='".$usuario;
		$q.= "' AND clave='".$clave."'";
		$r = mysqli_query($link,$q);
		$n = mysqli_num_rows($r);
		if($n==1){
			session_start();
			$_SESSION['usuario']=$usuario;
			//
			header("location:productos.php");
			exit;
		} else {
			header("location:login.php?e=2");
			exit;
			//print "Usuario o clave de acceso erroneo";	
		}
		
	}
	
} else {
	header("location:login.php?e=3");
	exit;
}
?>