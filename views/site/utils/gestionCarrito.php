<?php include '/xampp/htdocs/Web_Proyect/controllers/productosController.php' ?>
<?php include '/xampp/htdocs/Web_Proyect/controllers/boletasController.php' ?>
<?php include '/xampp/htdocs/Web_Proyect/views/site/utils/carritoObjeto.php' ?>
<?php session_start() ?>

<?php
    if(isset($_SESSION['carrito']) && isset($_SESSION['usuario'])){
        $carrito = $_SESSION['carrito'];
        $usuario = $_SESSION['usuario'];

        switch($_GET['task']){
            case 1:
                $carrito->vaciarCarrito();
                header("Location:/Web_Proyect/views/site/carrito.php");
                break;
            case 2:
                date_default_timezone_set('America/Lima');
                
                $tiempoBoleta = date("Y-m-d H:i:s");
                $usuarioBoleta = $usuario['correo'];
                $productosBoleta = "";
                $precioTotalBoleta = $_POST['precioTotal'];

                $productosBD = new productosController();
                $productosCarrito = $carrito->obtenerProductosAcumulados();

                foreach($productosCarrito as $productoCar){
                    $producto = $productosBD->getProduct($productoCar[0]);
                    $textoProducto = $producto['nombre'] . " S/" . $producto['precio'] . " x " . $productoCar[1] . ", ";
                    $productosBoleta = $productosBoleta . $textoProducto;
                    $productosBD->disminuirStock($productoCar[0],$productoCar[1]);
                }

                $carrito->vaciarCarrito();

                $boletasBD = new boletasController();
                $boletasBD->insertar(
                    $tiempoBoleta,
                    $usuarioBoleta,
                    $productosBoleta,
                    $precioTotalBoleta
                );
                break;
            case 3:
                $carrito->quitarProducto($_GET['id']);
                header("Location:/Web_Proyect/views/site/carrito.php");
                break;
        }
    } else{
        header("Location:/Web_Proyect/views/site/carrito.php");
    }
?>