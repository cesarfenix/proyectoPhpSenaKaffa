<style>
    body {
        background-color: fff;
    }
</style>
<br>
<section>
    <?php if (isset($_GET["accion"])) { ?>
        <br>
        <div id="content" class="container" style="margin-top: 3rem;">
            <div class="<?= $clase ?>" role="alert">
                <?php if ($clase == "alert alert-success") { ?>
                    <i class="far fa-check-circle"></i>
                <?php } else { ?>
                    <i class="far fa-window-close"></i>
                <?php } ?>
                <?= $mensaje ?>
            </div>
            <br>
        </div>
    <?php } ?>
    <a role="button" href="create.php" class="btn btn-success btn-lg" style="margin-left: 4rem;">Agregar Producto</a>
    <br>
    <h2 style="text-align:center; color: #fff;">Lista de ventas</h2>
    <br>
    <div class="container">
        <div class="container text-center">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-dark text-warning">
                        <th class="fs-3" scope="col">#</th>
                        <th class="fs-3" scope="col">Fecha de compra</th>
                        <th class="fs-3" scope="col">estado</th>
                        <th class="fs-3" scope="col">Fecha de entrega</th>
                        <th class="fs-3" scope="col">Fecha de envio</th>
                        <th class="fs-3" scope="col">Precio de venta</th>
                        <th class="fs-3" scope="col">Costo de envio</th>
                        <th class="fs-3" scope="col">Dirección de entrega</th>
                        <th class="fs-3" scope="col">Observación</th>
                        <th class="fs-3" scope="col">Id del producto</th>
                        <th class="fs-3" scope="col">Id de la venta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $position = 0;
                    foreach ($listaVentas as $venta) {
                        $position++; ?>

                        <tr>
                            <th scope="row"><?= $position ?></th>
                            <td><?= $venta->fecha_compra ?></td>
                            <td><?= $venta->estado ?></td>
                            <td><?= $venta->fecha_entrega ?></td>
                            <td><?= $venta->fecha_envio ?></td>
                            <td><?= $venta->precio_venta ?></td>
                            <td><?= $venta->costo_envio ?></td>
                            <td><?= $venta->direccion_entrega ?></td>
                            <td><?= $venta->observaciones ?></td>
                            <td><?= $venta->producto_id ?></td>
                            <td><?= $venta->venta_id ?></td>
                            <td>
                                <a class="btn btn-outline-warning" href="edit.php?id=<?= $venta->id ?>" role=" button">
                                    <i class="fas fa-pen"></i></a>
                                <a class="btn btn-outline-danger" href="destroy.php?id=<?= $venta->id ?>" role=" button">
                                    <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>