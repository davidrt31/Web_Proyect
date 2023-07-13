<?php 
    require_once('/xampp/htdocs/Web_Proyect/controllers/productosController.php');
    $obj = new productosController();
    $obj->delete($_GET['id'],$_GET['imagenRuta']);
?>