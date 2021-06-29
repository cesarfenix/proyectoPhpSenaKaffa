<br>
<section>
    <br>
    <h2 style="text-align:center">Crear Producto</h2>
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
                    <label class="fs-2" for="codigo" class="form-label">Codigo del producto</label>
                    <i class="fas fa-barcode"></i>
                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="codigo">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="nombre" class="form-label">Nombre del producto</label>
                    <i class="fas fa-signature"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="descripcion" class="form-label">Descricion del producto</label>
                    <i class="far fa-list-alt"></i>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="precio" class="form-label">Precio del producto</label>
                    <i class="far fa-money-bill-alt"></i>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="precio...$$$">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Crear Producto</button>
                </div>
            </div>
        </form>
    </div>
</section>