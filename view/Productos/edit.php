<br>
<section>
    <br>
    <h2 style="text-align:center">Editar producto</h2>
    <br>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 38rem;">
        <form action="update.php" method="POST">
            <div class="container text-center">
                <br>
                <div class="mb-3">
                    <label class="fs-2" for="id" class="form-label">Id del producto</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $producto->id ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="codigo" class="form-label">Codigo del producto</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="codigo" name="codigo" value="<?= $producto->codigo ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="nombre" class="form-label">Nombre del producto</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $producto->nombre ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="descripcion" class="form-label">Descripcion del producto</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $producto->descripcion ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="precio" class="form-label">Precio del producto</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="precio" name="precio" value="<?= $producto->precio ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</section>