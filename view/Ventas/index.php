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
    <a role="button" href="create.php" class="btn btn-success btn-lg" style="margin-left: 4rem;">Agregar venta</a>
    <br>
    <h2 style="text-align:center; color: #fff;">Lista de ventas</h2>
    <br>
    <div>
        <div class="text-center" style="margin-left:3%;margin-right:3%;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-dark text-warning">
                        <th >#</th>
                        <th >Fecha de compra</th>
                        <th >estado</th>
                        <th >Fecha de entrega</th>
                        <th >Fecha de envio</th>
                        <th >Precio de venta</th>
                        <th >Costo de envio</th>
                        <th >Dirección de entrega</th>
                        <th >Observación</th>
                        <th >Id del producto</th>
                        <th>Id de la venta</th>
                        <th>Aciones</th>
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