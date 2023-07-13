<?php session_start() ?>
<?php include '/xampp/htdocs/Web_Proyect/views/site/templates/header.php' ?>


</div>

<div class="" style="margin-top: 4.443rem; margin-bottom: 1rem;width:100%; background: green">
    <img src="assets/banners/Banner-Don-Gil.png" alt="" style="width: 100%; height: 350px">
</div>
<div class="container-md" style="margin-bottom: 2.50rem">
    <h3 class="text-center mt-4 mb-4" style="font-weight: bold">NUESTRAS <span class="text-danger">CATEGORÍAS</span></h3>
    <div class="container">
        <div class="row row-cols-4 row-gap-3 text-center p-2">
            <?php $categorias = array('CARNES, AVES Y PESCADOS','CONGELADOS','LÁCTEOS','FRUTAS Y VERDURAS','PANADERÍA Y PASTELERÍA','BEBIDAS','CUIDADO PERSONAL','LIMPIEZA');
            foreach ($categorias as $categoria){ ?>
                    <div class="col">
                        <a href="/Web_Proyect/views/site/productos.php?categoria=<?php echo $categoria?>" type="input" class="btn btn-outline-danger" style="width: 200px; height: 250px">
                            <div class="container-fluid">
                                <img src="assets/images/<?php echo $categoria?>.png" style="width: 100%; height: 150px" alt="<?php echo $categoria?>">
                            </div>
                            <div class="info-categoria mt-2">
                                <p style="font-weight: bold; font-size: 24px"><?php echo $categoria?></p>
                            </div>
                        </a>
                    </div>
                
            <?php } ?>
        </div>
    </div>
</div>





    <?php require_once('../views/site/templates/footer.php')?>