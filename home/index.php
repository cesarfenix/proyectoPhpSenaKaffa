<?php 
	session_start();
	if (isset($_SESSION["usuario"])) {
		require_once "../view/partials/headerAdmin.php";
		require_once "../view/home/index.php";
		//require_once "../view/partials/footer.php";
	}

 ?>