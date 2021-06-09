<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <title>Café de origen Colombiano - Kaffa specialty coffe</title>
    <link rel="icon" href="../imagenes/logoMarron.png" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
    <link href="../home/kaffa.css" type="text/css" rel="stylesheet" media />
  </head>
  <body>
    <header>
        <nav id="nav-admi" class="navbar navbar-expand-lg navbar-warning bg-warning">
          <div class="container-fluid" id="navbarSupportedContent">
            <a style="color: #000;" class="navbar-brand" href="../index.php">Inicio</a>
            <a style="color: #000;" class="navbar-brand" href="../view/usuarios/nosotros.php">Nosotros</a>
            <a style="color: #000;" class="navbar-brand" href="../view/usuarios/nuestraMarca.php">Nuestra marca</a>
            <a style="color: #000;" class="navbar-brand" href="../view/usuarios/nuestrosProductos.php">Nuestros productos</a>
            <a style="color: #000;" class="navbar-brand" href="../view/usuarios/contactanos.php">Contactanos</a>
            <a style="color: #000;" class="navbar-brand" href="#">Reseñas</a>
            <a style="color: #000;" class="navbar-brand" href="#">Reporte</a>
            <span style="color: #000; text-decoration: underline #000 ;" class="mx-2"><?= $_SESSION["nickname"] ?></span>
            <a style="text-decoration: none; margin: 0; padding: 0px; color: #ff0000;" href="../cerrarsesion.php"><i class="fas fa-times-circle fa-2x"></i></a>
          </div>
        </nav> 
      </header>
    </body>
    </html>