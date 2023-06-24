<?php

    $txtNameProd = $_POST['txtNameProd'];
    $txtDescProd = $_POST['txtDescProd'];
    $txtCateProd = $_POST['txtCateProd'];
    $txtProvProd = $_POST['txtProvProd'];
    $txtCostProd = $_POST['txtCostProd'];
    $txtCantProd = $_POST['txtCantProd'];

    require_once('../../../controllers/productosController.php');
    $obj = new productosController();
    $obj->guardarProductos($txtNameProd, $txtImgProd, $txtDescProd, $txtCateProd, $txtProvProd, $txtCostProd, $txtCantProd);

?>