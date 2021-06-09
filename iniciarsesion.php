<?php 
	session_start();
	require_once "model/Login.php";
	$login = new Login();
	$login->email= $_POST["usuario"];	
	$login->password = $_POST["password"];	
	$nickname = explode("@", $_POST["usuario"]);
	
		
	if($login->validar_usuario() == null){
		header("location:index.php?accion=3 ");
	}
	else{
		$_SESSION["usuario"]=$_POST["usuario"];
		$_SESSION["nickname"]= $nickname[0];
		header("location:home/index.php");
	}
	
	
 ?>