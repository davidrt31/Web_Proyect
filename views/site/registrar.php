<?php
    include '/xampp/htdocs/Web_Proyect/controllers/usuariosController.php';
    $obj = new usuariosController();
    
    $obj->registrar(
        $_POST['name'],
        $_POST['apellP'],
        $_POST['email'],
        $_POST['password'],
    );
?>