<?php 
	
	    require_once "../model/Usuario.php";
		$usuario = new Usuario();
		$usuario->identificacion= $_POST["identificacion"];
		$usuario->password= $_POST["password"];
		$usuario->nombre= $_POST["nombre"];
		$usuario->apellido= $_POST["apellido"];
		$usuario->rol = 3;
		$usuario->direccion= $_POST["direccion"];
		$usuario->telefono= $_POST["telefono"];
		$usuario->telefono_auxiliar= $_POST["telefono_auxiliar"];
		$usuario->email= $_POST["email"];	
		
		if($usuario->save() > 0){
			header("location:../index.php?accion=1");
		}
		else{
			header("location:../index.php?accion=2");
		}
	
 ?>