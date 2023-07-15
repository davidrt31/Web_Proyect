<?php 
    require_once('../templates/head.php');
    
    require_once('/xampp/htdocs/Web_Proyect/controllers/boletasController.php');

    $obj = new boletasController();
    $rows = $obj->getAllBoletas();
?>

<div class="row">
    <div class="col-md-12 rounded p-3" style="background: rgba(255,255,255, 0.85);backdrop-filter: blur(5px)">
        <h2 class="text-center">Tabla de Boletas</h2>

        <table class="table container-fluid mt-2 table-striped">
            <thead class="table-warning">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CÓDIGO</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">PRODUCTOS</th>
                    <th scope="col">PAGO TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <?php if($rows): ?>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td scope="row"><?= $row['id_boleta']?></td>
                            <td scope="row"><?= $row['codigo_boleta']?></td>
                            <td scope="row"><?= $row['fecha']?></td>
                            <td scope="row"><?= $row['usuario']?></td>
                            <td scope="row"><?= $row['productos']?></td>
                            <td scope="row">S/. <?= $row['pago_total']?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No hay registros en la tabla de boletas</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>



<?php require_once('../templates/footer.php'); ?>