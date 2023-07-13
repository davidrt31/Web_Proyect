<?php require_once('../templates/head.php') ?>

<div class="row">
    <h3 class="text-light text-center mb-4">Agregar nuevo producto</h3>
    <div class="col-md-12 me-4">
        <div class="row rounded bg-light" style="box-shadow: -10px 10px 10px rgba(255,255,255,0.5)">
            <form class="p-4" action="store.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="infoProducto" style="display: grid; grid-template-columns: 50% 50%;">
                    <div>
                        <div class="mb-3 me-4">
                            <label for="txtNameProd" class="form-label">Nombre del Producto:</label>
                            <input type="text" name="txtNameProd" required
                                class="form-control border-secondary-subtle" id="txtNameProd">
                        </div>
                        <div class="mb-3 me-4">
                            <label for="txtImgProd" class="form-label">Imagen del Producto:</label>
                            <input type="file" name="txtImgProd"
                                class="form-control border-secondary-subtle" id="txtImgProd">
                        </div>
                        <div class="mb-3 me-4">
                            <label for="txtDescProd" class="form-label">Descripción del Producto:</label>
                            <input type="text" name="txtDescProd" required
                                class="form-control border-secondary-subtle" id="txtDescProd">
                        </div>
                        <div class="mb-3 me-4">
                            <label for="txtCateProd" class="form-label">Categoría del Producto:</label>
                            <select class="form-select" aria-label="Default select example" id="txtCateProd"
                                name="txtCateProd">
                                <option selected value="CARNES, AVES Y PESCADOS">CARNES, AVES Y PESCADOS</option>
                                <option value="CONGELADOS">CONGELADOS</option>
                                <option value="BEBIDAS">BEBIDAS</option>
                                <option value="CUIDADO PERSONAL">CUIDADO PERSONAL</option>
                                <option value="FRUTAS Y VERDURAS">FRUTAS Y VERDURAS</option>
                                <option value="LACTEOS">LACTEOS</option>
                                <option value="LIMPIEZA">LIMPIEZA</option>
                                <option value="PANADERIA Y PASTELERIA">PANADERIA Y PASTELERIA</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 ms-4">
                            <label for="txtProvProd" class="form-label">Proveedor:</label>
                            <input type="text" name="txtProvProd" required class="form-control border-secondary-subtle"
                                id="txtProvProd">
                        </div>
                        <div class="mb-3 ms-4">
                            <label for="txtCostProd" class="form-label">Precio del Producto:</label>
                            <input type="text" name="txtCostProd" required class="form-control border-secondary-subtle"
                                pattern="[0-9]+(\.[0-9]+)?" id="txtCostProd">
                        </div>
                        <div class="ms-4 mb-3">
                            <label for="txtCantProd" class="form-label">Stock:</label>
                            <input type="number" name="txtCantProd" required class="form-control border-secondary-subtle"
                                min="0" max="100" id="txtCantProd">
                        </div>
                        <div class="ms-4" style="margin-top: 44px;">
                            <button type="submit" class="btn btn-primary mt-1">Guardar</button>
                            <a href="index.php" class="btn btn-secondary mt-1">Cancelar</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<?php require_once('../templates/footer.php') ?>