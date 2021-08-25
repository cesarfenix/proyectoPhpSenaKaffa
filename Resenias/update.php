<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Resenia.php";
    $resenia = new Resenia();
    $resenia->id = $_POST["id"];
    $resenia->codigo = $_POST["codigo"];
    $resenia->nombre = $_POST["nombre"];
    $resenia->descripcion = $_POST["descripcion"];
    $resenia->precio = $_POST["precio"];
    $resenia->tiendaId = 1;
    if ($producto->update() > 0) {
        header("location:Index.php?accion=3");
    } else {
        header("location:Index.php?accion=4");
    }
}else{
    header("location:../index.php");
}
   