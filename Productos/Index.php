<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Producto.php";
    $producto = new Producto();
    $listaProductos = $producto->all();
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "El producto se creo correctamente";
                $clase = "alert alert-success";
                break;
            case '2':
                $mensaje = "Error el producto no pudo ser creado";
                $clase = "alert alert-danger";
            case '3':
                $mensaje = "El producto se actualizo correctamente";
                $clase = "alert alert-success";
                break;
            case '4':
                $mensaje = "Error el producto no pudo ser actualizado";
                $clase = "alert alert-danger";
            case '5':
                $mensaje = "El producto se elimino correctamente";
                $clase = "alert alert-success";
                break;
            case '6':
                $mensaje = "Error el producto no pudo ser eliminado";
                $clase = "alert alert-danger";
        }
    }
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Productos/index.php";
    require_once "../view/partials/footer.php";
}else{
    header("location:../index.php");
}
?>