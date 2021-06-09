<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Café de origen Colombiano - Kaffa specialty coffe</title>
    </head>
    <body>
      <header>
             <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <a class="navbar-brand" href="../index.php">Inicio</a>
              <a class="dropdown-item" href="../view/usuarios/nosotros.php">Nosotros</a>   
              <a class="dropdown-item" href="../view/usuarios/nuestraMarca.php">Nuestra marca</a>
              <a class="dropdown-item" href="../view/usuarios/nuestrosProductos.php">Nuestros productos</a>
              <a class="dropdown-item" href="../view/usuarios/contactanos.php">Contactanos</a>
              <a class="dropdown-item" href="#">Reseñas</a>
              <a class="dropdown-item" href="#">Contactanos</a>
              <a class="nav-link active" aria-current="page" href="view/logins/login.html">Iniciar Sessión</a>
              <a class="nav-link active" aria-current="page" href="view/usuario/registro.html">Registrarse</a>
              <span class="mx-2"><?= $_SESSION["usuario"] ?></span>
              <a class="btn btn-outline-success my-4 my-sm-0" href="../cerrarsesion.php">Cerrar sesión</a>
            </div>
          </nav>
       </header>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
