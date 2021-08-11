<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Venta.php";
    $venta = new Venta();
    $venta->id = $_GET["id"];
    if ($venta->delete() > 0) {
        header("location:Index.php?accion=5");
    } else {
        header("location:Index.php?accion=6");
    }
}else{
    header("location:../index.php");
}