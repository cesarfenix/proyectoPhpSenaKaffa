<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Venta.php";
    $venta = new Venta();
    $listaVentas = $venta->all();
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Ventas/create.php";
    require_once "../view/partials/footer.php";
}else{
    header("location:../index.php");
}
    
?>