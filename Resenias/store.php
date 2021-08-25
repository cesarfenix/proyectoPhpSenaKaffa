<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Resenia.php";
    $resenia = new Resenia();
    $resenia->id = $_POST["id"];
    $resenia->calificacion = $_POST["calificacion"];
    $resenia->observaciones = $_POST["observaciones"];
    $resenia->fecha = $_POST["fecha"];
    $resenia->producto_id = $_POST["producto_id"];
    $resenia->usuario_id = $_POST["usuario_id"];
    
    if ($resenia->save() > 0) {
        header("location:Index.php?accion=1");
    } else {
        header("location:Index.php?accion=2");
    }
}else{
    header("location:../index.php");
}
    

?>