<?php
require_once "../model/Usuario.php";
	$usuario = new Usuario();
	//$usuario = $usuario->all();

	if (isset($_GET["accion"])) {
		switch ($_GET["accion"]) {
			case '1':
				$mensaje ="El usuario se registro correctamente";
				$clase = "alert alert-success";  
				break;
				case '2':
				$mensaje ="El usuario no se regitro";
				$clase = "alert alert-danger";  
				break;
				case '3':
				$mensaje ="";
				$clase = "";  
				break;
				case '4':
				$mensaje ="";
				$clase = "alert alert-danger";  
				break;
				case '5':
				$mensaje ="";
				$clase = "alert alert-success";  
				break;
				case '6':
				$mensaje ="";
				$clase = "alert alert-danger";  
				break;
			
		}
	}
    require_once "../view/partials/headerall.php";
   require_once "../view/jugadores/index.php";
    require_once "../view/partials/footer.php";
    

 ?>