<?php 
    require_once('../templates/head.php');
    require_once('/xampp/htdocs/Web_Proyect/controllers/productosController.php');
    $obj = new productosController();
    $producto = $obj->showProduct($_GET['id']);
?>

<div class="row">
    <div class="col-md-12 rounded p-4 mb-4" style="background: rgba(255,255,255, 0.85);backdrop-filter: blur(5px)">
        <div class="text-center mb-3">
            <h2 class="mb-3">Modificando Registro</h2>
            <img width="180" src="/Web_Proyect/assets/images/<?= $producto['imagen']?>" alt="">
        </div>
        <form action="update.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="txtId" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="txtId" readonly class="form-control-plaintext" id="txtId"
                        value="<?= $producto['id']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtNameProd" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" name="txtNameProd" class="form-control" id="txtNameProd"
                        value="<?= $producto['nombre']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtImgProd" class="col-sm-2 col-form-label">Imagen</label>
                <div class="col-sm-10">
                    <input type="file" name="txtImgProd" class="form-control" id="txtImgProd"
                        value="<?= $producto['imagen']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtDescProd" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" name="txtDescProd" requires class="form-control" id="txtDescProd"
                        value="<?= $producto['descripcion']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtCateProd" class="col-sm-2 col-form-label">Categoría</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="txtCateProd" name="txtCateProd">
                        <?php
                            $categorias = array(
                            'Bebidas', 'Carnes, aves y pescados', 'Congelados', 'Cuidado Personal',
                            'Frutas y Verduras', 'Lácteos', 'Limpieza', 'Panadería y Pastelería');

                            foreach ($categorias as $categoria) {
                                $selected = ($producto['categoria'] == $categoria) ? 'selected' : '';
                                echo "<option value='$categoria' $selected>$categoria</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtProvProd" class="col-sm-2 col-form-label">Proveedor</label>
                <div class="col-sm-10">
                    <input type="text" name="txtProvProd" class="form-control" id="txtProvProd"
                        value="<?= $producto['proveedor']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtCostProd" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="text" name="txtCostProd" class="form-control" id="txtCostProd"
                        value="<?= $producto['precio']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtCantProd" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" name="txtCantProd" class="form-control" id="txtCantProd"
                        value="<?= $producto['stock']?>">
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-success mt-3" value="Actualizar">
                <a class="btn btn-danger ms-2 mt-3" href="show.php?id=<?= $producto['id']?>">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php require_once('../templates/footer.php') ?>