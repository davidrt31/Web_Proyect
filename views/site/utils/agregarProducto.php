<?php include '/xampp/htdocs/Web_Proyect/views/site/utils/carritoObjeto.php' ?>
<?php session_start() ?>
<?php

    if(isset($_SESSION['carrito'])){
        $carrito = $_SESSION['carrito'];
    } else{
        $carrito = new carritoObjeto();
    }

    $carrito->agregarProducto($_GET['id']);

    $_SESSION['carrito'] = $carrito;

    header("Location:/Web_Proyect/views/site/productos.php");
?>