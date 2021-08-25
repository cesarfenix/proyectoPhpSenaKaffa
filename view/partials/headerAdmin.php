<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/5168e6291e.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../index.css">
  <title>Hello, world!</title>
  <style>
    .escudo {
      background-image: url("https://i.pinimg.com/236x/e5/44/3a/e5443ac57cdacd5a93ba2312f315a6cb.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      height: 12rem;
      width: 12rem;
      margin: auto;
      border-radius: 30%;
    }

    #contenidoHome {
      background-image: url("https://e.rpp-noticias.io/xlarge/2018/11/06/706059drwif7oxqaifrk8png.png");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      height: 52rem;
      width: 58rem;
      margin: auto;
      border-radius: 3%;
    }

    body {
      background-color: #ffffff;
    }
  </style>
</head>

<body style="padding: 1px 0px 0 0px ;">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFCC33;">
      <div class="container-fluid">
        <a class="navbar-brand fs-2" href="../index.php">
          <i class="fas fa-stroopwafel fs-2" style="margin-right:1rem;"></i></a>
        <a class="navbar-brand fs-2" href="../home/index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown fs-2">
              <a class="nav-link" href="../Productos/index.php" id="navbarDropdown" role="button"  aria-expanded="false">
                Productos
              </a>
            </li>
            <li class="nav-item dropdown fs-2">
              <a class="nav-link" href="../Ventas/index.php" id="navbarDropdown" role="button"  aria-expanded="false">
                Ventas
              </a>
            </li>
            <li class="nav-item dropdown fs-2">
              <a class="nav-link" href="../Resenias/index.php" id="navbarDropdown" role="button"  aria-expanded="false">
                Reseñas de productos
              </a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0"></form>
          <span class="mx-3"><?= $_SESSION["nickname"] ?></span>
          <a class="btn btn-outline-danger" role="button" href="../CerrarSesion.php">Cerrar Sesion</a>
        </div>
      </div>
    </nav>
  </header>