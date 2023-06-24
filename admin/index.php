<?php 
    require_once('../views/admin/templates/head.php');
?>
<br>
<br>
<h2 class="text-light text-center">¿Qué desea hacer?</h2>
<br>
<div class="row justify-content-center text-center align-items-center g-2">
    <div class="col p-3 text-bg-dark" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;">
        <h5>Administrar Usuarios</h5>
        <hr>
        <small class="text-justify">Apartado para la visualización o modificación de los usuarios registrados en la
            Tienda</small>
        <a href="<?php echo $url; ?>/views/admin/usuarios/index.php" class="btn btn-primary mt-3">Revisar Tabla de Usuarios</a> <br>
        <a href="<?php echo $url; ?>/views/admin/usuarios/create.php" class="btn btn-success m-3">Agregar nuevo usuario</a>
    </div>
    <div class="col p-3 text-light" style="background: rgb(118, 36, 196)">
        <h5>Administrar Productos</h5>
        <hr>
        <small class="text-justify">Apartado para la visualización o modificación de los productos en la Base de
            Datos</small>
        <a href="<?php echo $url; ?>/views/admin/productos/index.php" class="btn btn-primary mt-3">Revisar Tabla de Productos</a> <br>
        <a href="<?php echo $url; ?>/views/admin/productos/create.php" class="btn btn-success m-3">Agregar nuevo Producto</a>
    </div>
    <div class="col text-bg-danger p-3" style="border-top-right-radius: 1rem; border-bottom-right-radius: 1rem;">
        <h5>Administrar Tickets</h5>
        <hr>
        <small class="text-justify">Apartado para la visualización o modificación de los tickets generados por los
            usuarios al comprar</small>
        <a href="<?php echo $url; ?>/views/admin/tickets/index.php" class="btn btn-primary" style="margin-top: 2.70rem; margin-bottom: 2.70rem">Revisar Tabla de Tickets</a>
    </div>
</div>

<?php require_once('../views/admin/templates/footer.php')?>