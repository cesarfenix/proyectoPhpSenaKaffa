<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../model/Resenia.php";
    $resenia = new Resenia();
    $id = $_GET["id"];
    $resenia = $resenia->find($id);
    require_once "../view/partials/headerAdmin.php";
    require_once "../view/Resenias/edit.php";
}else{
    header("location:../index.php");
}