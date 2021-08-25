<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Resenia.php";
   
    $resenia = new Resenia();
    $listaResenias = $resenia->all();
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Resenias/create.php";
}else{
    header("location:../index.php");
}
    
?>