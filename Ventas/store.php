<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Venta.php";
    $venta = new Venta();
    $venta->fecha_compra = $_POST["fecha_compra"];
    $venta->estado = $_POST["estado"];
    $venta->fecha_entrega = $_POST["fecha_entrega"];
    $venta->fecha_envio = $_POST["fecha_envio"];
    $venta->precio_venta = $_POST["precio_venta"];
    $venta->costo_envio = $_POST["costo_envio"];
    $venta->direccion_entrega = $_POST["direccion_entrega"];
    $venta->observaciones = $_POST["observaciones"];
    $venta->producto_id = $_POST["producto_id"];
    $venta->venta_id = $_POST["venta_id"];
    if ($venta->save() > 0) {
        header("location:Index.php?accion=1");
    } else {
        header("location:Index.php?accion=2");
    }
}else{
    header("location:../index.php");
}
    

?>