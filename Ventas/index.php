<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Venta.php";
    $venta = new Venta();
    $listaVentas = $venta->all();
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "La venta fue registrada correctamente";
                $clase = "alert alert-success";
                break;
            case '2':
                $mensaje = "Error la venta no pudo ser registrada";
                $clase = "alert alert-danger";
            case '3':
                $mensaje = "Venta actualizada correctamente";
                $clase = "alert alert-success";
                break;
            case '4':
                $mensaje = "Error la venta no pudo ser actualizada";
                $clase = "alert alert-danger";
            case '5':
                $mensaje = "Venta eliminada correctamente";
                $clase = "alert alert-success";
                break;
            case '6':
                $mensaje = "Error la venta no pudo ser eliminada";
                $clase = "alert alert-danger";
        }
    }
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Ventas/index.php";
    require_once "../view/partials/footer.php";
}else{
    header("location:../index.php");
}
?>