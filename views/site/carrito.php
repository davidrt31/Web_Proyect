<?php include '/xampp/htdocs/Web_Proyect/views/site/utils/carritoObjeto.php' ?>
<?php include '/xampp/htdocs/Web_Proyect/controllers/productosController.php' ?>

<?php session_start() ?>
<?php include '/xampp/htdocs/Web_Proyect/views/site/templates/header.php' ?>

<?php
    $productosController = new productosController();

    if(isset($_SESSION['carrito'])){
        $carrito = $_SESSION['carrito'];
    } else{
        $carrito = new carritoObjeto();
    }

    $productosAcumulados = $carrito->obtenerProductosAcumulados();
    $sumaPrecios = 0;
?>


</div>

<div class="container-fluid" style="margin-top: 6.5rem; margin-bottom: 2rem; width: 90%">
    <div class="row">
        <div class="col-8">
            <div class="container mt-3 mb-3">
                <div class="" style="box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.486),
                                        5px 5px 5px rgba(0, 0, 0, 0.486); border-radius: 0.5rem">
                    <div class="container mt-3 p-2"
                        style="background: darkblue; border-top-right-radius: 0.5rem; border-top-left-radius: 0.5rem">
                        <h3 class="text-center" style="font-weight: bold; color: white">Productos en tu carrito</h3>
                    </div>
                    <!--PRODUCTOS EN CARRITO-->
                    <?php foreach($productosAcumulados as $productoAcu){ ?>
                    <?php $producto = $productosController->getProduct($productoAcu[0]); ?>
                    <?php $sumaPrecios = $sumaPrecios + $producto['precio']; ?>
                    <div class="producto">
                        <div class="container p-3"
                            style="background: white; border-bottom-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem">
                            <div class="row mt-2 mb-2">
                                <div class="col-2 text-center ms-3 me-3">
                                    <img class="mt-3 mb-3" src="/Web_Proyect/assets/images/<?= $producto['imagen'] ?>"
                                        width="100px" height="100px">
                                </div>
                                <div class="col-6 me-3">
                                    <div class="row align-items-center" id="container-info-prod">
                                        <div>
                                            <p class="col mt-3 limitado" style="font-size: 16px; text-align: left">
                                                <?= $producto['descripcion'] ?></p>
                                        </div>

                                        <div class="col mt-3">
                                            <div class="row">
                                                <select class="col-2 ms-2" id="cantidadProducto"
                                                    style="border: transparent">
                                                    <?php
                                                            $quantities = array(1,2,3,4,5,6,7,8,9,10);
                                                            foreach($quantities as $quantity){
                                                                $selected = ($productoAcu[1] == $quantity) ? 'selected' : '';
                                                                echo "<option value='$quantity' $selected>$quantity</option>";
                                                            }
                                                        ?>
                                                </select>
                                                <a id="btnDelete" class="col-3 ms-4 btn"
                                                    href="utils/gestionCarrito.php?task=3&id=<?= $productoAcu[0] ?>"><i
                                                        class="bi bi-trash"></i>Quitar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3" style="text-align:right">
                                    <div class="row mt-3">
                                        <p class="col-5" style="font-size:14px; text-align: left">Precio c/u: </p>
                                        <div class="col-3">S/. </div>
                                        <!--Usando la base de datos y el controlador de productos por id, obtendríamos el precio unitario del producto y luego lo multiplicamos por el valor del <select> -->
                                        <div class="col-4"><input type="text" id="precioProducto"
                                                style="border: none; background:transparent;" disabled
                                                value="<?= $producto['precio'] ?>" readonly></div>
                                        <p class="col-5" style="font-size:14px; text-align: left">Subtotal: </p>
                                        <div class="col-3">S/. </div>
                                        <!--En esta parte va el multiplicador de la cantidad seleccionada por el precio del producto-->
                                        <div class="col-4"><input type="text" id="totalProducto" disabled
                                                style="border: none; background:transparent;" value="0" readonly></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                        
                        <div class="d-flex justify-content-end">
                        <a class="btn btn-secondary m-2" href="utils/gestionCarrito.php?task=1">VACIAR CARRITO</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container mt-3 mb-3">
                <div class="" style="box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.486),
                                        5px 5px 5px rgba(0, 0, 0, 0.486); border-radius: 0.5rem">
                    <div class="container mt-3 p-2"
                        style="background: darkblue; border-top-right-radius: 0.5rem; border-top-left-radius: 0.5rem">
                        <h3 class="text-center" style="font-weight: bold; color: white">Resumen del Pedido</h3>
                    </div>
                    <div class="container p-3"
                        style="background: white; border-bottom-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem">
                        <!--FORMULARIO PARA COMPRA TOTAL-->
                        <form action="utils/gestionCarrito.php?task=2" class="text-center" method="post">
                            <div class="row mt-2" style="margin-bottom: -0.5rem; margin-left: -3rem">
                                <p class="col-6">Total a pagar: </p>
                                <div class="row col-6" style="text-align:right">
                                    <span class="col-8">S/. </span>
                                    <div class="col-4">
                                        <input type="text" id="precioTotal" name="precioTotal"
                                            value="<?= number_format($sumaPrecios,2) ?>"
                                            style="border: none; background:transparent;" readonly>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <input type="submit" class="btn" id="btnComprar" style="width: 100%;" value="COMPRAR">
                            <!--<p class="mt-1" style="font-size: 12px; text-align:left">Al continuar, aceptas las <span
                                        class="text-primary">Condiciones de uso</span> y la <span
                                        class="text-primary">Política de Privacidad</span>.</p>-->
                        </form>
                        <hr>
                        <div class="row">
                            <p class="col-9" style="font-weight: bold; font-size: 13px">Garantía de Devolución de Dinero
                            </p>
                            <div class="col-3 text-center">
                                <i class="bi bi-box2-heart-fill" style="color: blue"></i>
                            </div>
                            <p class="col-9" style="margin-top: -15px; font-size: 13px">Estamos aquí para ti. Obtén un
                                reembolso completo si cualquiera de tus artículos no llega.</p>
                        </div>
                        <hr>
                        <p style="font-size: 12px; color: blue; margin-top: -8px; margin-bottom: -6px"><i
                                class="bi bi-shield-fill-check"></i> &nbsp; 30 días para devoluciones y reembolsos
                            gratuitos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos para que quede bonito xd -->
<style>

body{
    overflow-x: hidden;
}

#btnDelete {
    background: darkblue;
    color: white;
}

#btnDelete:hover {
    background: transparent;
    border: 0.2px darkblue solid;
    color: darkblue;
}

.limitado {
    overflow: hidden;
    max-height: 60px;
}

#btnComprar {
    background: darkblue;
    color: white
}

#btnComprar:hover {
    background: transparent;
    border: 0.2px darkblue solid;
    color: darkblue;
}

</style>


<!-- Script de la página carrito-->
<script>
/*window.addEventListener('DOMContentLoaded', function() {
    var p1 = document.getElementById('descripcion');

    limitarAltura(p1, 60);
});

function limitarAltura(elemento, alturaMaxima) {
    var alturaActual = elemento.clientHeight;

    if (alturaActual > alturaMaxima) {
        while (elemento.clientHeight > alturaMaxima) {
            elemento.textContent = elemento.textContent.replace(/\W*\s(\S)*$/, '...');
        }
    }
}*/

window.addEventListener('DOMContentLoaded', function() {
    var limitados = document.getElementsByClassName('limitado');

    for (var i = 0; i < limitados.length; i++) {
        truncarTexto(limitados[i]);
    }
});

function truncarTexto(elemento) {
    var alturaMaxima = parseInt(window.getComputedStyle(elemento).getPropertyValue('max-height'));
    var contenido = elemento.textContent.trim();

    while (elemento.scrollHeight > alturaMaxima && contenido.length > 0) {
        contenido = contenido.slice(0, -1);
        elemento.textContent = contenido + '...';
    }
}

//SCRIPT PARA CALCULO TOTAL A PAGAR POR PRODUCTO
var productos = document.getElementsByClassName('producto');
var precioTotal = document.getElementById('precioTotal');

for (i = 0; i < productos.length; i++) {
    var precio = productos[i].querySelector('#precioProducto');
    var cantidad = productos[i].querySelector('#cantidadProducto');
    var total = productos[i].querySelector('#totalProducto');

    cantidad.addEventListener('change', function(precio, cantidad, total) {
        return function() {
            var precioV = parseFloat(precio.value);
            var cantidadV = parseInt(cantidad.value);
            var totalV = (precioV * cantidadV).toFixed(2);
            total.value = totalV;
            calcularTotal();
        };
    }(precio, cantidad, total));
    total.value = (parseFloat(precio.value) * parseInt(cantidad.value)).toFixed(2);;
}

function calcularTotal() {
    var precioTotalV = 0;
    for (i = 0; i < productos.length; i++) {
        precioTotalV = precioTotalV + parseFloat(productos[i].querySelector('#totalProducto').value);
    }
    precioTotal.value = precioTotalV.toFixed(2);
}

calcularTotal();
</script>
<?php include('templates/footer.php')?>