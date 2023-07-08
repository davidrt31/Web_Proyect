<?php include('templates/header.php')?>

</div>


<div class="container-fluid" style="margin-top: 6.5rem; margin-bottom: 2rem; border: 1px black solid; width: 90%">
    <div class="row">
        <div class="col-8" style="background: green">
            <div class="container mt-3 mb-3" style="background: yellow">
                <div class="" style="box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.486),
                                        5px 5px 5px rgba(0, 0, 0, 0.486); border-radius: 0.5rem">
                    <div class="container mt-3 p-2"
                        style="background: darkblue; border-top-right-radius: 0.5rem; border-top-left-radius: 0.5rem">
                        <h3 class="text-center" style="font-weight: bold; color: white">Productos en tu carrito</h3>
                    </div>
                    <div class="container p-3"
                        style="background: white; border-bottom-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem">
                        <div class="row mt-2" style="margin-bottom: -0.5rem">
                            <div class="text-center col-3 ms-3" style="background: whitesmoke">
                                <img src="../../assets/images/NOT FOUNDED.png" width="100px">
                            </div>
                            <p class="col-6" style="text-align:right">S/. <span class="prec-tot"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4" style="background: pink">
            <div class="container mt-3 mb-3" style="background: yellow">
                <div class="" style="box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.486),
                                        5px 5px 5px rgba(0, 0, 0, 0.486); border-radius: 0.5rem">
                    <div class="container mt-3 p-2"
                        style="background: darkblue; border-top-right-radius: 0.5rem; border-top-left-radius: 0.5rem">
                        <h3 class="text-center" style="font-weight: bold; color: white">Resumen del Pedido</h3>
                    </div>
                    <div class="container p-3"
                        style="background: white; border-bottom-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem">
                        <div class="row mt-2" style="margin-bottom: -0.5rem">
                            <p class="col-6">Total a pagar: </p>
                            <p class="col-6" style="text-align:right">S/. <span class="prec-tot"></span></p>
                        </div>
                        <hr>
                        <form action="" class="text-center">
                            <input class="btn text-light" style="background: darkblue; width: 100%; margin: "
                                type="button" value="Hacer Pedido">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Script para obtener el precio total de los productos del carrito -->
<script>

</script>
<?php include('templates/footer.php')?>