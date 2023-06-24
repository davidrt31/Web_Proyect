<?php
    include '/xampp/htdocs/Web_Proyect/controllers/usuariosController.php';
    $obj = new usuariosController();
    $obj->login($_POST['email'],$_POST['password']);
?>