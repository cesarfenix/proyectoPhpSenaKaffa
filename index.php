<?php 
session_start();
if (isset($_SESSION["usuario"])) {
  header("location:home/index.php");
}
else{
  if (isset($_GET["accion"])) {
      switch ($_GET["accion"]) {
        case '1':
          $mensaje ="El usuario se creo correctamente";
          $clase = "alert alert-success";  
          break;
          case '2':
          $mensaje ="El usuario no se creo";
          $clase = "alert alert-danger";  
          break;
          case '3':
          $mensaje ="Usuario o contraseña incorrectos";
          $clase = "alert alert-danger";  
          break;
        }
    }
    require_once "view/index.php";
  }
 ?>