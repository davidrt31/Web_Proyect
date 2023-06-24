<?php 
    require_once('../templates/head.php');
    
    require_once('/xampp/htdocs/Web_Proyect/controllers/usuariosController.php');

    $obj = new usuariosController();
    $rows = $obj->index();
?>

<div class="row">
    <div class="col-md-12 rounded p-3" style="background: rgba(255,255,255, 0.85);backdrop-filter: blur(5px)">
        <h2 class="text-center">Tabla de Usuarios</h2>
        <div class="pb-3">
            <a href="create.php" class="btn btn-primary">Agregar nuevo usuario</a>
        </div>

        <table class="table container-fluid mt-2 table-striped">
            <thead class="table-warning">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if($rows): ?>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td scope="row"><?= $row['id']?></td>
                            <td scope="row"><?= $row['names']?></td>
                            <td scope="row"><?= $row['lastnames']?></td>
                            <td scope="row"><?= $row['email']?></td>
                            <td scope="row"><?= $row['pass']?></td>
                            <td scope="row">
                                <a href="show.php?id=<?= $row['id']?>" class="btn btn-success" style="margin-top: -3px; margin-bottom: -3px">Detalles</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No hay registros en la tabla de usuarios</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>



<?php require_once('../templates/footer.php'); ?>