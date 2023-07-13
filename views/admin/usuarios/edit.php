<?php 
    require_once('../templates/head.php');
    require_once('/xampp/htdocs/Web_Proyect/controllers/usuariosController.php');
    $obj = new usuariosController();
    $user = $obj->getUser($_GET['id']);
?>

<div class="row">
    <div class="col-md-12 rounded p-3" style="background: rgba(255,255,255, 0.85);backdrop-filter: blur(5px)">
        <h2 class="text-center mb-3">Modificando Registro</h2>
        <form action="update.php" method="POST" autocomplete="off">
        <div class="mb-3 row">
                <label for="txtId" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="id" readonly class="form-control-plaintext" id="txtId" value="<?= $user['id']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtNames" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" name="nombre" class="form-control" id="txtNames" value="<?= $user['nombre']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtLastNames" class="col-sm-2 col-form-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" name="apelliP" class="form-control" id="txtLastNames" value="<?= $user['apellido_paterno']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtLastNames" class="col-sm-2 col-form-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" name="apelliM" class="form-control" id="txtLastNames" value="<?= $user['apellido_materno']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtEmail" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                    <input type="email" name="correo" requires class="form-control" id="txtEmail" value="<?= $user['correo']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtPassword" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="txtPassword" value="<?= $user['password']?>">
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-success mt-3" value="Actualizar">
                <a class="btn btn-secondary ms-2 mt-3" href="show.php?id=<?= $user['id']?>">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php require_once('../templates/footer.php') ?>