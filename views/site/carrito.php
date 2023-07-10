<?php include('templates/header.php')?>

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
                    <div class="container p-3"
                        style="background: white; border-bottom-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem">
                        <div class="row mt-2 mb-2">
                            <div class="col-2 ms-3 me-3" style="position: relative">
                                <img style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"
                                    src="../../assets/images/NOT FOUNDED.png" width="100px" height="100px">
                            </div>
                            <div class="col-6 me-3">
                                <div class="row">
                                    <p id="descripcion" class="col-12 mt-1" style="font-size: 14px; text-align: left">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam beatae quae
                                        perferendis minus doloremque magni amet ipsa rem! Sit dolorum repellat quos
                                        nulla neque voluptatem quia perferendis totam, sint maxime.</p>
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <select class="col-2 ms-2" name="" id="" style="border: transparent">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <a id="btnDelete" class="col-3 ms-4 btn" href=""><i class="bi bi-trash"></i>
                                                Quitar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3" style="text-align:right">
                                <div class="row">
                                    <p class="col-5" style="font-size:14px; text-align: left">Precio c/u: </p>
                                    <div class="col-3">S/. </div>
                                    <!--Usando la base de datos y el controlador de productos por id, obtendríamos el precio unitario del producto y luego lo multiplicamos por el valor del <select> -->
                                    <div class="col-4">4.00</div>
                                    <p class="col-5" style="font-size:14px; text-align: left">Precio total: </p>
                                    <div class="col-3">S/. </div>
                                    <!--En esta parte va el multiplicador de la cantidad seleccionada por el precio del producto-->
                                    <div class="col-4">12.00</div>
                                </div>
                            </div>
                        </div>
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
                        <div class="row mt-2" style="margin-bottom: -0.5rem">
                            <p class="col-6">Total a pagar: </p>
                            <div class="row col-6" style="text-align:right">
                                <span class="col-8">S/. </span>
                                <!--Aquí va el acumulador de precios; no pude concretarlo con js-->
                                <p class="col-4" id="prec-pag-tot">31.00</p>
                            </div>
                        </div>
                        <hr>
                        <form action="" class="text-center">
                            <input id="btnComprar" class="btn" style="width: 100%;" type="button" value="Hacer Pedido">
                            <p class="mt-1" style="font-size: 12px; text-align:left">Al continuar, aceptas las <span
                                    class="text-primary">Condiciones de uso</span> y la <span
                                    class="text-primary">Política de Privacidad</span>.</p>
                        </form>
                        <hr>
                        <div class="row">
                            <p class="col-9" style="font-weight: bold; font-size: 13px">Garantía de Devolución de Dinero
                            </p>
                            <div class="col-3 text-center">
                                <i class="bi bi-box2-heart-fill" style="color: blue"></i>
                            </div>
                            <p class="col-9" style="margin-top: -15px; font-size: 13px">Estamos aquí para ti. Obtén un reembolso completo si cualquiera de tus artículos no llega.</p>
                        </div>
                        <hr>
                        <p style="font-size: 12px; color: blue; margin-top: -8px; margin-bottom: -6px"><i class="bi bi-shield-fill-check"></i> &nbsp; 30 días para devoluciones y reembolsos gratuitos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos para que quede bonito xd -->
<style>
#btnDelete {
    background: darkblue;
    color: white;
}

#btnDelete:hover {
    background: transparent;
    border: 0.2px darkblue solid;
    color: darkblue;
}

#descripcion {
    overflow: hidden;
    text-overflow: ellipsis;
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
window.addEventListener('DOMContentLoaded', function() {
    var p1 = document.getElementById('descripcion');

    limitarAltura(p1, 60); // Establece una altura máxima de 100px para el primer párrafo
});

function limitarAltura(elemento, alturaMaxima) {
    var alturaActual = elemento.clientHeight;

    if (alturaActual > alturaMaxima) {
        while (elemento.clientHeight > alturaMaxima) {
            elemento.textContent = elemento.textContent.replace(/\W*\s(\S)*$/, '...');
        }
    }
}
</script>
<?php include('templates/footer.php')?>