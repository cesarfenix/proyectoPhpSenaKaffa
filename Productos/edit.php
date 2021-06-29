<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Producto.php";
    $producto = new Producto();
    $id = $_GET["id"];
    $producto = $producto->find($id);
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Productos/edit.php";
    require_once "../view/partials/footer.php";
}else{
    header("location:../index.php");
}

