<?php 
    require_once('../templates/head.php');
    require_once('../../../controllers/usuariosController.php');
    $obj = new usuariosController();
    
    $row = $obj->getUser($_GET['id']);
?>

<div class="row">
    <div class="col-md-12 rounded p-3" style="background: rgba(255,255,255, 0.85);backdrop-filter: blur(5px)">
        <h2 class="text-center">Detalles del registro</h2>
        <div class="pb-3">
            <a href="index.php" class="btn btn-primary">Regresar</a>
            <a href="edit.php?id=<?= $row[0];?>" class="btn btn-success">Actualizar</a>
            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Eliminar
            </a>


        </div>

        <table class="table container-fluid mt-2">
            <thead class="table-warning">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"><?= $row['id']?></td>
                    <td scope="row"><?= $row['nombre']?></td>
                    <td scope="row"><?= $row['apellido_paterno']?></td>
                    <td scope="row"><?= $row['apellido_materno']?></td>
                    <td scope="row"><?= $row['correo']?></td>
                    <td scope="row"><?= $row['password']?></td>
                </tr>
            </tbody>
        </table>


    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar luego
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('../templates/footer.php');?>