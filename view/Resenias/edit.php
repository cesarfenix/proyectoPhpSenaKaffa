<br>
<section>
    <br>
    <h2 style="text-align:center">Editar reseña</h2>
    <br>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 38rem;">
        <form action="update.php" method="POST">
            <div class="container text-center">
                <br>
                <div class="mb-3">
                    <label class="fs-2" for="id" class="form-label">Id de la reseña</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="number" class="form-control" id="id" name="id" value="<?= $resenia->id ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="calificacion" class="form-label">Calificación</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="number" class="form-control" id="calificacion" name="calificacion" value="<?= $resenia->calificacion ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="observaciones" class="form-label">Observaciones</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" value="<?= $resenia->observaciones ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="fecha" class="form-label">Fecha</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?= $resenia->fecha ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="producto_id" class="form-label">Producto id</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="number" class="form-control" id="producto_id" name="producto_id" value="<?= $resenia->producto_id ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="usuario_id" class="form-label">Usuario id</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="number" class="form-control" id="usuario_id" name="usuario_id" value="<?= $resenia->$usuario_id ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</section>