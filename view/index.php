 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="author" content="Juan Esteban Feijoo Morales - César Augusto Rodriguez Diaz" />
        <meta
            name="description"
            content="en esta pagina encontraras uno de los mejores cafes de origen,
         y cafes especiales de colombia, kaffa specialty coffe - cafe de origen Calarca Quindio, el mejor cafe"
        />
        <meta
            name="keywords"
            content="kaffa specialty coffe, kaffa, coffe, cafe de colombia, cafe de origen,
        cafe especial, el mejor cafe especial, cafe organico, delicioso cafe colombiano"
        />
        <title>Café de origen Colombiano - Kaffa specialty coffe</title>
        <link rel="icon" href="../imagenes/logoMarron.png" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
        <link href="kaffacss/kaffa.css" type="text/css" rel="stylesheet" media />
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
        </div>
        </form>
    </section> 
 </body>
 </html>