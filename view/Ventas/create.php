<br>
<section>
    <br>
    <h2 style="text-align:center">Registrar venta</h2>
    <br>
    <br>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 62rem;">
        <form action="store.php" method="POST">
            <div class="container text-center">
                <br>
                <!--<div class="mb-3">
                    <label class="fs-2" for="id" class="form-label">Id del producto</label>
                    <i class="fas fa-barcode"></i>
                    <input type="text" class="form-control" id="id" name="id" placeholder="id">
                </div>-->
                <div class="mb-3">
                    <label class="fs-2" for="nombre" class="form-label">Fecha de compra</label>
                    <i class="fas fa-signature"></i>
                    <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" placeholder="fecha de compra">
                </div>
                <div class="mb-3">
                   <!--<label class="fs-2" for="estado" class="form-label">Estado</label>
                    <i class="far fa-list-alt"></i>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
        -->
                    <select class="form-select" aria-label="estado" id="select" name="select" required>
                        <option selected>Seleccione un estado</option>
                        <option value="1">Aprobado</option>
                        <option value="2">Anulado</option>
                        <option value="3">En proceso</option>}
                        <option value="4">Entrega exitosa</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="fecha_entrega" class="form-label">Fecha de entrega</label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" placeholder="Fecha de entrega">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="fecha_envio" class="form-label">Fecha de envio</label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="date" class="form-control" id="fecha_envio" name="fecha_envio" placeholder="Fecha de envio">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="precio_venta" class="form-label">Precio de venta</label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="number" class="form-control" id="precio_venta" name="precio_venta" placeholder="Precio de venta">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="costo_envio" class="form-label">Costo de envio</label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="number" class="form-control" id="costo_envio" name="costo_envio" placeholder="Costo de envio">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="direccion_entrega" class="form-label">direccion de entrega</label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="text" class="form-control" id="direccion_entrega" name="direccion_entrega" placeholder="Direccion de entrega">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="observaciones" class="form-label">Observaciones</label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder=" observaciones">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="producto_id " class="form-label">Id del producto </label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="number" class="form-control" id="producto_id " name="producto_id " placeholder=" Id del producto">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="venta_id  " class="form-label">Id de la venta </label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="number" class="form-control" id="venta_id  " name="venta_id  " placeholder=" Id de la venta">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Registrar venta</button>
                </div>
            </div>
        </form>
    </div>
</section>