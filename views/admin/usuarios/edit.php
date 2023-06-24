<?php 
    require_once('../templates/head.php');
    require_once('/xampp/htdocs/Web_Proyect/controllers/usuariosController.php');
    $obj = new usuariosController();
    $user = $obj->show($_GET['id']);
?>

<div class="row">
    <div class="col-md-12 rounded p-3" style="background: rgba(255,255,255, 0.85);backdrop-filter: blur(5px)">
        <h2 class="text-center mb-3">Modificando Registro</h2>
        <form action="update.php" method="POST" autocomplete="off">
        <div class="mb-3 row">
                <label for="txtId" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="txtId" readonly class="form-control-plaintext" id="txtId" value="<?= $user['id']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtNames" class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" name="txtNames" class="form-control" id="txtNames" value="<?= $user['names']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtLastNames" class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-10">
                    <input type="text" name="txtLastNames" class="form-control" id="txtLastNames" value="<?= $user['lastnames']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtEmail" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                    <input type="email" name="txtEmail" requires class="form-control" id="txtEmail" value="<?= $user['email']?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="txtPassword" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="text" name="txtPassword" class="form-control" id="txtPassword" value="<?= $user['pass']?>">
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-success mt-3" value="Actualizar">
                <a class="btn btn-danger ms-2 mt-3" href="show.php?id=<?= $user['id']?>">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php require_once('../templates/footer.php') ?>