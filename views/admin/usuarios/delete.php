<?php 
    require_once('/xampp/htdocs/Web_Proyect/controllers/usuariosController.php');
    $obj = new usuariosController();

    $obj->delete($_GET['id']);

?>