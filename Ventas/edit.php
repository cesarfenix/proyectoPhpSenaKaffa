<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Venta.php";
    $venta = new Venta();
    $id = $_GET["id"];
    $venta = $venta->find($id);
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Ventas/edit.php";
    require_once "../view/partials/footer.php";
}else{
    header("location:../index.php");
}
