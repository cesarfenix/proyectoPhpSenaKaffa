<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Resenia.php";
    $resenia = new Resenia();
    $resenia->id = $_GET["id"];
    if ($resenia->delete() > 0) {
        header("location:Index.php?accion=5");
    } else {
        header("location:Index.php?accion=6");
    }
}else{
    header("location:../index.php");
}

