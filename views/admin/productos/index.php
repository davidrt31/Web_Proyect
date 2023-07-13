<?php 
    require_once('../templates/head.php');
    
    require_once('/xampp/htdocs/Web_Proyect/controllers/productosController.php');

    $obj = new productosController();
    $rows = $obj->getAllProducts();
?>

<div class="row">
    <div class="col-md-12 rounded p-3 mb-4" style="background: rgba(255,255,255, 0.85);backdrop-filter: blur(5px)">
        <h2 class="text-center">Tabla de Productos</h2>
        <div class="pb-3">
            <a href="create.php" class="btn btn-primary">Agregar nuevo producto</a>
        </div>

        <table class="table container-fluid mt-2 table-striped">
            <thead class="table-warning">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if($rows): ?>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td scope="row"><?= $row['id']?></td>
                            <td scope="row"><?= $row['nombre']?></td>
                            <td scope="row">
                                <img width="50" height="50" src="/Web_Proyect/assets/images/<?= $row['imagen']?>" alt="">    
                            </td>
                            <td scope="row"><?= $row['categoria']?></td>
                            <td scope="row"><?= $row['descripcion']?></td>
                            <td scope="row"><?= $row['proveedor']?></td>
                            <td scope="row ">S/<?= $row['precio']?></td>
                            <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp; <?= $row['stock']?></td>
                            <td scope="row">
                                <a href="show.php?id=<?= $row['id']?>" class="btn btn-success" style="margin-top: -3px; margin-bottom: -3px">Detalles</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" class="text-center">No hay registros en la tabla de usuarios</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>



<?php require_once('../templates/footer.php'); ?>