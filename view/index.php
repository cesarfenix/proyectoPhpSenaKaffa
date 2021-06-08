 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="style.css" type="text/css" rel="stylesheet" media />
   <link rel="icon" href="imagenes/logo.jpeg" />
   <title></title>
 </head>
 <body>
  <section id="vistalogin">
   <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>
        <form action="iniciarsesion.php"method="post">
              <div class="login-box">
                <img class="avatar" src="imagenes/logueo.jpg" alt="logo">
                <h1>Iniciar session</h1>
                <form>
                <label for="usuario">Usuario</label>
                <input type="email" placeholder="ejemplo@ejemplo.com" id="usuario" name="usuario">
                <label for="password">Password</label>
                <input type="password" placeholder="Ingrese la contraseña" id="password" name="password">
              
              <input type="submit" name="Iniciar sesion" value="Iniciar sesión">
              <a href="#">Olvide mi contraseña</a><br>
              <a href="usuarios/create.php">No estoy registrado</a>
            </form>
            </form>
        </div>
    </section> 
 </body>
 </html>