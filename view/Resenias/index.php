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
    <a role="button" href="create.php" class="btn btn-success btn-lg" style="margin-left: 4rem;">Agregar reseña</a>
    <br>
    <h2 style="text-align:center; color: #fff;">Lista de reseñas</h2>
    <br>
    <div class="container">
        <div class="container text-center">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-dark text-warning">
                        <th class="fs-3" scope="col">#</th>
                        <th class="fs-3" scope="col">Calificación</th>
                        <th class="fs-3" scope="col">Observaciones</th>
                        <th class="fs-3" scope="col">Fecha</th>
                        <th class="fs-3" scope="col">Producto id</th>
                        <th class="fs-3" scope="col">Usuario id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $position = 0;
                    foreach ($listaResenias as $resenia) {
                        $position++; ?>

                        <tr>
                            <th scope="row"><?= $position ?></th>
                            <td><?= $resenia->calificacion ?></td>
                            <td><?= $resenia->observaciones ?></td>
                            <td><?= $resenia->fecha ?></td>
                            <td><?= $resenia->id ?></td>
                            <td><?= $resenia->usuarios ?></td>
                            <td>
                                <a class="btn btn-outline-warning" href="edit.php?id=<?= $resenia->id ?>" role=" button">
                                    <i class="fas fa-pen"></i></a>
                                <a class="btn btn-outline-danger" href="destroy.php?id=<?= $resenia->id ?>" role=" button">
                                    <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>