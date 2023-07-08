<?php 
    require_once('/xampp/htdocs/Web_Proyect/controllers/productosController.php');
    $obj = new productosController();

    $obj->deleteProduct($_GET['id']);

?>