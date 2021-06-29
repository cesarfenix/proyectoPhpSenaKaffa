<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Producto.php";
    $producto = new Producto();
    $listaProductos = $producto->all();
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Productos/create.php";
    require_once "../view/partials/footer.php";
}else{
    header("location:../index.php");
}
    
?>