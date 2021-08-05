<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Producto.php";
    $producto = new Producto();
    $producto->id = $_POST["id"];
    $producto->codigo = $_POST["codigo"];
    $producto->nombre = $_POST["nombre"];
    $producto->descripcion = $_POST["descripcion"];
    $producto->precio = $_POST["precio"];
    $producto->tiendaId = 1;
    if ($producto->update() > 0) {
        header("location:Index.php?accion=3");
    } else {
        header("location:Index.php?accion=4");
    }
}else{
    header("location:../index.php");
}
   
