<?php 
    require_once('templates/header.php');
    require_once('/xampp/htdocs/Web_Proyect/controllers/productosController.php');

    $obj = new productosController();

    if(isset($_POST['txtCateProd']) && $_POST['txtCateProd'] != "Todos los productos"){
        $ListaProductos = $obj->getProductsByCategory($_POST['txtCateProd']);
    } else{
        
            $ListaProductos = $obj->indexProduct();
        
    }
?>

<header class="navbar navbar-light bg-black">
    <div class="container-md">
        <a class="navbar-brand text-light" style="font-size: 16px" href="#"><span>CARNES, AVES Y PESCADOS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="#"><span>CONGELADOS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="#"><span>LÁCTEOS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="#"><span>FRUTAS Y VERDURAS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="#"><span>PANADERÍA Y PASTELERÍA</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="#"><span>BEBIDAS</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="#"><span>CUIDADO PERSONAL</span></a>
        <a class="navbar-brand text-light" style="font-size: 16px" href="#"><span>LIMPIEZA</span></a>
    </div>
</header>
</div>




<div class="container-fluid" style="margin-top: 7.5rem">
    <div class="container-md form-filtro-category">
        <form action="productos.php" method="post">
            <div class="row row-cols-3">
                <label class="col-3 mt-1 mb-1" for="txtCateProd"><h4>Filtro por Categoría -></h4></label><br>
                <div class="col-6 text-center" >
                    <select class="col-8" aria-label="Default select example" id="txtCateProd" name="txtCateProd"
                        style="padding: 10px; background-color:#CBF7C1; border-radius: 5px;">
                        <option selected value="Todos los productos">TODOS LOS PRODUCTOS</option>
                        <option value="Carnes, aves y pescados">CARNES, AVES Y PESCADOS</option>
                        <option value="Congelados">CONGELADOS</option>
                        <option value="Bebidas">BEBIDAS</option>
                        <option value="Lácteos">LÁCTEOS</option>
                        <option value="Frutas y Verduras">FRUTAS Y VERDURAS</option>
                        <option value="Panadería y Pastelería">PANADERIA Y PASTELERIA</option>
                        <option value="Cuidado Personal">CUIDADO PERSONAL</option>
                        <option value="Limpieza">LIMPIEZA</option>
                    </select>
                </div>
                <div class="col-3 input" style="text-align: right">
                    <input class="btn btn-success mt-1"  type="submit" value="FILTRAR">
                </div>
            </div>

        </form>

    </div>


    <div class="row row-cols-5 row-gap-3 p-5" style="margin-bottom: -22px">
        <?php 
            if(($ListaProductos)!=''){
                foreach($ListaProductos as $producto){?>
        <div class="col">
            <div class="card" style="background: #ffffff; height: fit-content">
                <div class="text-center mb-2" style="height: 150px">
                    <img class="" src="/Web_Proyect/assets/images/<?php echo $producto['img_prod']; ?>" alt=""
                        width="150" height="150" style="margin-top: 10px">
                </div>
                <div class="card-body" style="height: 30px">
                    <p class="card-title mb-1 text-muted" style="font-weight: bold; font-size: 15px">
                        <?php echo $producto['prov_prod']?></p>
                </div>
                <div class="text-body ms-3" style="text-align: left; margin-top: 10px; margin-bottom: -16px">
                    <p class="card-subtitle mb-1"><?php echo $producto['name_prod']?></p>
                </div>
                <div class="card-body" style="height: 120px">
                    <p class="card-text" style="font-size: 14px"><?php echo $producto['desc_prod']?></p>
                    <p class="" style="color: red;font-weight: bold; margin-top: -8px">
                        S/.<?php echo $producto['cost_prod']?> x Kg</p>
                </div>
                <div class="btn-container" style="text-align: center ; justify-content: center; height: 60px">
                    <a id="btnAgregar" href="#" style="">Agregar</a>
                </div>
            </div>
        </div>
        <?php } } else {?>
        <div class="col-md-12 text-center" style="height: 290px">
            <h2>No hay elementos para mostrar de la categoría "<?php echo $_POST['txtCateProd']?>"</h2>
        </div>
        <?php } ?>


        <?php require_once('templates/footer.php')?>