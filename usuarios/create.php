<?php
session_start();
if (isset($_SESSION["usuario"])) {	
    require_once "../view/usuarios/registro.php";
    require_once "../model/Usuario.php";
    $usuario = new Usuario();
    $listaUsuarios = $usuario->all();
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Productos/create.php";
    require_once "../view/partials/footer.php";
}else{
    header("location:../index.php");
}
    
?>