<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Producto.php";
    $producto = new Producto();
    $producto->id = $_GET["id"];
    if ($producto->delete() > 0) {
        header("location:Index.php?accion=5");
    } else {
        header("location:Index.php?accion=6");
    }
}else{
    header("location:../index.php");
}

