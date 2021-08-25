<br>
<section>
    <br>
    <h2 style="text-align:center">Crear reseña</h2>
    <br>
    <br>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 32rem;">
        <form action="store.php" method="POST">
            <div class="container text-center">
                <br>
                <div class="mb-3">
                    <label class="fs-2" for="calificacion" class="form-label">Calificación</label>
                    <i class="fas fa-barcode"></i>
                    <input type="number" class="form-control" id="calificacion" name="calificacion" placeholder="Calificación">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="observaciones" class="form-label">Observación</label>
                    <i class="fas fa-signature"></i>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observación">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="fecha" class="form-label">Fecha</label>
                    <i class="far fa-list-alt"></i>
                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
                </div>
                <div class="mb-3">
                    <!--
                    <label class="fs-2" for="producto_id" class="form-label">Producto id </label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="number" class="form-control" id="producto_id" name="producto_id" placeholder="producto_id">
        -->
                    <label class="fs-2">Producto id</label>
                <select class="form-control" id="producto_id" name="producto_id">
                    <?php foreach ($listaProductos as $producto) { ?>
                        <option value="<?= $producto->id ?>"><?= $producto->nombre ?></option>
                        <?php } ?>
                </select>
                </div>
                <div class="mb-3">
                <label class="fs-2">Usuario id</label>
                <select class="form-control" id="id" name="id">
                    <?php foreach ($listaUsuarios as $usuario) { ?>
                        <option value="<?= $usuario->id ?>"><?= $usuario->nombre ?></option>
                        <?php } ?>
                </select>
                    </div>
                <!--
                <div class="mb-3">
                    <label class="fs-2" for="usuario_id " class="form-label">Usuario id </label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="number" class="form-control" id="usuario_id" name="usuario_id" placeholder="usuario_id">
                </div>-->
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Crear reseña</button>
                </div>
            </div>
        </form>
    </div>
</section>