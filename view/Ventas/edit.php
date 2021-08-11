<br>
<section>
    <br>
    <h2 style="text-align:center">Editar venta</h2>
    <br>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 38rem;">
        <form action="update.php" method="POST">
            <div class="container text-center">
                <br>
                <div class="mb-3">
                    <label class="fs-2" for="id" class="form-label">Id de la venta</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $venta->id ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="fecha_compra" class="form-label">Fecha compra</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" value="<?= $venta->fecha_compra ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="estado" class="form-label">Estado</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="estado" name="estado" value="<?= $venta->estado ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="fecha_entrega" class="form-label">Fecha de entrega</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" value="<?= $venta->fecha_entrega ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="fecha_envio" class="form-label">Fecha de envio</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="date" class="form-control" id="fecha_envio" name="fecha_envio" value="<?= $venta->fecha_envio ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="precio_venta" class="form-label">Precio de venta</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="number" class="form-control" id="precio_venta" name="precio_venta" value="<?= $venta->precio_venta ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="costo_envio" class="form-label">Costo de envio</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="date" class="form-control" id="costo_envio" name="costo_envio" value="<?= $venta->costo_envio ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="direccion_entrega" class="form-label">Direccion de entrega</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="direccion_entrega" name="direccion_entrega" value="<?= $venta->direccion_entrega ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="observaciones" class="form-label">Observaciones</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" value="<?= $venta->observaciones ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="producto_id" class="form-label">Producto id</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="number" class="form-control" id="producto_id" name="producto_id" value="<?= $venta->producto_id ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="venta_id" class="form-label">Venta id</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="number" class="form-control" id="venta_id" name="venta_id" value="<?= $venta->venta_id ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</section>