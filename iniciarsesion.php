<?php 
	session_start();
	require_once "model/Login.php";
	$login = new Login();
	$login->email= $_POST["usuario"];	
	$login->password = $_POST["password"];	
		
	if($login->validar_usuario() == null){
		header("location:index.php?accion=3 ");
	}
	else{
		$_SESSION["usuario"]=$_POST["usuario"];
		header("location:home/index.php");
	}
	
	
 ?>