<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="../style.css" type="text/css" rel="stylesheet" media />
    <link href="../view/usuarios/registro.css" type="text/css" rel="stylesheet" media />
    <link rel="icon" href="../imagenes/logoMarron.png" />
</head>

<body>
    <section id="vistalogin">
        <div class="container">
            <h1 class="text-center" id="tituloregistro">Registro de usuarios</h1><br>
            <form action="store.php" method="post">

                <!--
           <form method="POST" action="../../usuarios/store.php">
           -->


                <div class="col-12 row">
                    <div class="col-2"></div>
                    <div class="col-8" id="box-registro-usuario">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Documento de identidad</label>
                                <input type="text" class="form-control" name="identificacion" id="identificacion">
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="col-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="col-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <div class="col-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellido" id="apellido">
                            </div>
                            <div class="col-6">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="direccion" id="direccion">
                            </div>
                            <div class="col-6">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono">
                            </div>
                            <div class="col-6">
                                <label for="telefono_auxiliar" class="form-label">Telefono auxiliar</label>
                                <input type="text" class="form-control" name="telefono_auxiliar" id="telefono_auxiliar">
                            </div>
                            <div class="col-6">
                            </div>
                            <div class="col-12 row" style="margin-top: 2rem">
                                <div class="col-3"></div>
                                <div class="col-6 row">
                                    <div class="col-8"><button type="submit" class="btn btn-success btn-lg">Registrar</button>
                                    </div>
                                    <div class="col-4"><a role="button" href="../index.php" class="btn btn-warning btn-lg">Atras</a>
                                    </div>
                                </div>
                                <div class="col-3"></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>