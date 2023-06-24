<?php

    $txtNames = $_POST['txtNames'];
    $txtLastNames = $_POST['txtLastNames'];
    $txtEmail = $_POST['txtEmail'];
    $txtPassword = $_POST['txtPassword'];

    require_once('../../../controllers/usuariosController.php');
    $obj = new usuariosController();
    $obj->guardar($txtNames, $txtLastNames, $txtEmail, $txtPassword);

?>