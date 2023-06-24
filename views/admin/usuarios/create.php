<?php require_once('../templates/head.php')?>
<div class="row">
    <h3 class="text-light mb-4">Agregar nuevo usuario</h3>
    <div class="col-md-4 me-4">
        <div class="row rounded bg-light" style="box-shadow: -10px 10px 10px rgba(255,255,255,0.5)">
            <form class="p-4" action="store.php" method="POST" autocomplete="off">
                <div class="infoUser" style="display: grid; grid-template-columns: 50% 50%;">
                    <div class="mb-3 me-2">
                        <label for="txtNames" class="form-label">Nombres:</label>
                        <input type="text" name="txtNames" required class="form-control border-secondary-subtle" id="txtNames">
                    </div>
                    <div class="mb-3 ms-2">
                        <label for="txtLastNames" class="form-label">Apellidos:</label>
                        <input type="text" name="txtLastNames" required class="form-control border-secondary-subtle" id="txtLastNames">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="txtEmail" class="form-label">Correo:</label>
                    <input type="email" name="txtEmail" required class="form-control border-secondary-subtle" id="txtEmail">
                </div>
                <div class="mb-3">
                    <label for="txtPassword" class="form-label">Contraseña:</label>
                    <input type="password" name="txtPassword" required class="form-control border-secondary-subtle" id="txtPassword">
                </div>
                <button type="submit" class="btn btn-primary mt-1">Guardar</button>
                <button type="submit" class="btn btn-danger mt-1">Cancelar</button>
            </form>
        </div>
    </div>
</div>

<?php require_once('../templates/footer.php')?>