<?php require_once('../templates/head.php')?>
<div class="row">
    <h3 class="text-light mb-4">Agregar nuevo usuario</h3>
    <div class="col-md-4 me-4">
        <div class="row rounded bg-light" style="box-shadow: -10px 10px 10px rgba(255,255,255,0.5)">
            <form class="p-4" action="store.php" method="POST" autocomplete="off">
                <div class="infoUser" style="display: grid; grid-template-columns: 50% 50%;">
                    <div class="mb-3 me-2">
                        <label for="txtNames" class="form-label">Nombres</label>
                        <input type="text" name="nombre" required class="form-control border-secondary-subtle" id="txtNames">
                    </div>
                    <div class="mb-3 ms-2">
                        <label for="txtLastNames" class="form-label">Apellido Paterno</label>
                        <input type="text" name="apelliP" required class="form-control border-secondary-subtle" id="txtLastNames">
                    </div>
                    <div class="mb-3 ">
                        <label for="txtLastNames" class="form-label">Apellidos Materno</label>
                        <input type="text" name="apelliM" required class="form-control border-secondary-subtle" id="txtLastNames">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="txtEmail" class="form-label">Correo:</label>
                    <input type="email" name="correo" required class="form-control border-secondary-subtle" id="txtEmail">
                </div>
                <div class="mb-3">
                    <label for="txtPassword" class="form-label">Contraseña:</label>
                    <input type="password" name="password" required class="form-control border-secondary-subtle" id="txtPassword">
                </div>
                <button type="submit" class="btn btn-primary mt-1">Guardar</button>
                <a href="index.php" class="btn btn-secondary mt-1">Cancelar</a>
                <?php
                    if(isset($_GET['email']) && $_GET['email'] == "Invalid"){
                        echo ('<div style="color: white; background-color:red; border-radius:10px; margin:10px; text-align:center">El correo ingresado ya está Registrado!</div>');
                    }
                ?>
            </form>
        </div>
    </div>
</div>

<?php require_once('../templates/footer.php')?>