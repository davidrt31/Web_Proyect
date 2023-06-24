<?php 
    $txtId = $_POST['txtId'];
    $txtNames = $_POST['txtNames'];
    $txtLastNames = $_POST['txtLastNames'];
    $txtEmail = $_POST['txtEmail'];
    $txtPassword = $_POST['txtPassword'];
    
    require_once('/xampp/htdocs/Web_Proyect/controllers/usuariosController.php');
    $obj = new usuariosController();
    $obj->update($txtId, $txtNames, $txtLastNames, $txtEmail, $txtPassword);
?>