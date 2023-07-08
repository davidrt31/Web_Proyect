<?php 
    require_once('templates/header.php');
    require_once('/xampp/htdocs/Web_Proyect/controllers/productosController.php');

    $obj = new productosController();

    if(isset($_GET['categoria'])){
        $ListaProductos = $obj->getProductsByCategory($_GET['categoria']);
    } else{
        $ListaProductos = $obj->indexProduct();
    }
?>

<header class="navbar navbar-light bg-black">
    <div class="container-md">
        <a class="navbar-brand text-light" style="font-size: 16px" href="productos.php?categoria=CARNES, AVES Y PESCADOS"><span>CARNES, AVES Y PESCADOS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="productos.php?categoria=CONGELADOS"><span>CONGELADOS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="productos.php?categoria=LÁCTEOS"><span>LÁCTEOS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="productos.php?categoria=FRUTAS Y VERDURAS"><span>FRUTAS Y VERDURAS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="productos.php?categoria=PANADERÍA Y PASTELERÍA"><span>PANADERÍA Y PASTELERÍA</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="productos.php?categoria=BEBIDAS"><span>BEBIDAS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="productos.php?categoria=CUIDADO PERSONAL"><span>CUIDADO PERSONAL</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="productos.php?categoria=LIMPIEZA"><span>LIMPIEZA</span></a>
    </div>
</header>
</div>




<div class="container-fluid" style="margin-top: 7.5rem">

    <div class="row row-cols-5 row-gap-3 p-5" style="margin-bottom: -22px">
        <?php 
            if(($ListaProductos)!=''){
                foreach($ListaProductos as $producto){?>
        <div class="col">
            <div class="card" style="background: #ffffff; height: fit-content">
                <div class="text-center mb-2" style="height: 150px">
                    <img class="" src="/Web_Proyect/assets/images/<?php echo $producto['imagen']; ?>" alt=""
                        width="150" height="150" style="margin-top: 10px">
                </div>
                <div class="card-body" style="height: 30px">
                    <p class="card-title mb-1 text-muted" style="font-weight: bold; font-size: 15px">
                        <?php echo $producto['proveedor']?></p>
                </div>
                <div class="text-body ms-3" style="text-align: left; margin-top: 10px; margin-bottom: -16px">
                    <p class="card-subtitle mb-1"><?php echo $producto['nombre']?></p>
                </div>
                <div class="card-body" style="height: 120px">
                    <p class="card-text" style="font-size: 14px"><?php echo $producto['descripcion']?></p>
                    <p class="" style="color: red;font-weight: bold; margin-top: -8px">
                        S/.<?php echo $producto['precio']?> x Kg</p>
                </div>
                <div class="btn-container" style="text-align: center ; justify-content: center; height: 60px">
                    <a id="btnAgregar" href="#">Agregar</a>
                </div>
            </div>
        </div>
        <?php } } else {?>
        <div class="col-md-12 text-center" style="height: 290px">
            <h2>No hay elementos para mostrar de la categoría "<?php echo $_POST['txtCateProd']?>"</h2>
        </div>
        <?php } ?>


        <?php require_once('templates/footer.php')?>