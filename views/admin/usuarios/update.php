<?php 
    include '/xampp/htdocs/Web_Proyect/controllers/usuariosController.php';

    $obj = new usuariosController();
    $obj->update(
        $_POST['id'],
        $_POST['nombre'],
        $_POST['apelliP'],
        $_POST['apelliM'],
        $_POST['correo'],
        $_POST['password']
    );
?>