<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <title>Hello, world!</title>
    </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="../index.php">Inicio</a>
            <a class="dropdown-item" href="../view/usuarios/nosotros.php">Nosotros</a>
            <a class="dropdown-item" href="#">Nuestra marca</a>
            <a class="dropdown-item" href="#">Nuestros productos</a>
            <a class="dropdown-item" href="#">Contactanos</a>
            <a class="dropdown-item" href="#">Reseñas</a>
            <a class="dropdown-item" href="#">Reporte</a>
            <span class="mx-2"><?= $_SESSION["usuario"] ?></span>
            <a class="btn btn-outline-success my-2 my-sm-0" href="../cerrarsesion.php"><i class="fas fa-user"></i></a>
          </div>
        </nav>
      </header>