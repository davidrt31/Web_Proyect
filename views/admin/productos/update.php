<?php

    $txtId = $_POST['txtId'];
    $txtNameProd = $_POST['txtNameProd'];
    $txtImgProd = (isset($_FILES['txtImgProd']['name']))?$_FILES['txtImgProd']['name']:"";
    $txtDescProd = $_POST['txtDescProd'];
    $txtCateProd = $_POST['txtCateProd'];
    $txtProvProd = $_POST['txtProvProd'];
    $txtCostProd = $_POST['txtCostProd'];
    $txtCantProd = $_POST['txtCantProd'];

    require_once('../../../controllers/productosController.php');
    $obj = new productosController();
    $obj->updateProduct($txtId, $txtNameProd, $txtImgProd, $txtDescProd, $txtCateProd, $txtProvProd, $txtCostProd, $txtCantProd)
?>