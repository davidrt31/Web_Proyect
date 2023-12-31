<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $url1 = $_SERVER['HTTP_HOST'] . "/Web_Proyect";
} else {
    $url1 = $_SERVER['HTTP_HOST'];
}

$url = "http://" . $url1;
?>

<!doctype html>
<html lang="en">

<head>
    <title>La Tiendita de Don Gil</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="shortcut icon" href="<?php echo $url; ?>/web/assets/DonGil.ico" type="image/x-icon">
    <style>
    body {
        /*background-color: rgba(177, 180, 200);*/
    }

    #nav-center-index {
        width: 80%;
        margin: 0 auto;
    }

    #menu-user {
        justify-content: right;
    }

    header {
        margin-top: -10px;
        height: 45px
    }

    header span:hover {
        color: #a34ef3
    }

    #home::before {
        content: "";
        display: block;
        position: absolute;
        border-radius: 5px;
        top: 0%;
        height: 5px;
        width: 0px;
        background: rgb(137, 43, 226);
        transition: width 0.25s;
    }

    #products::before,
    #myaccount::before,
    #mycarrito::before {
        content: "";
        display: block;
        position: absolute;
        border-radius: 5px;
        top: -40%;
        height: 5px;
        width: 0px;
        background: rgb(137, 43, 226);
        transition: width 0.25s;
    }

    #home:hover::before {
        width: 65px;
    }

    #products:hover::before {
        width: 98px;
    }

    #myaccount:hover::before {
        width: 108px;
    }

    #mycarrito:hover::before {
        width: 95px;
    }

    #home,
    #products,
    #myaccount,
    #mycarrito {
        color: white;
    }

    #home:hover,
    #products:hover,
    #myaccount:hover,
    #mycarrito:hover {
        color: blueviolet;
    }

    #btnAgregar {
        color: white;
        background: #7d3c98;
        padding: 0.5rem 1.5rem;
        border-radius: 5rem;
        font-weight: bold;
        border: 1px solid transparent;
        text-decoration: none;
    }

    #btnAgregar:hover {
        background: transparent;
        color: #7d3c98;
        border-color: #7d3c98;
    }


    /*--PROMOCIONES--*/
    .info__promos {
        background: rgb(101, 17, 179);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 3rem;
        justify-content: right;
        text-align: center;
    }

    .promos__container {
        background: transparent;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        height: 20rem;
        overflow: hidden;
        border-left: 0.5px blueviolet solid;
        border-bottom: 0.5px blueviolet solid;
        border-right: 0.5px blueviolet solid;
    }

    .info__ofertas {
        background: rgb(28, 37, 173);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 3rem;
        justify-content: right;
        text-align: center;
    }

    .ofertas__promos {
        background: rgb(28, 37, 173);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 3rem;
        justify-content: right;
        text-align: center;
    }

    .ofertas__container {
        background: transparent;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        height: 20rem;
        overflow: hidden;
        border-left: 0.5px rgb(28, 37, 173) solid;
        border-bottom: 0.5px rgb(28, 37, 173) solid;
        border-right: 0.5px rgb(28, 37, 173) solid;
    }

    .swiper-slide {
        z-index: 2;
    }

    #card-categorias {
        background: #7D5BAF;
        height: 200px;
        color: white;
        border: 1px blueviolet solid;
    }

    #card-categorias:hover {
        background: transparent;
        color: blueviolet;
    }
    </style>
</head>

<body>
    <div class="nav-container fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black" data-bs-theme="dark">
            <div id="nav-center-index">
                <div class="row row-cols-3">
                    <a class="col-md-6 navbar-brand" href="<?php echo $url; ?>/web/index.php">
                        <img src="<?php echo $url?>/web/assets/DonGilLogo.png" width="45" height="45"
                            class="d-inline-block align-top" alt="Logo"
                            style="background:white; border-radius:100%; padding: 1px">
                        &nbsp; <span style="font-family: 'Dancing Script', cursive; font-size: 30px;">La Tiendita de Don
                            Gil</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="menu-user" class="col collapse navbar-collapse navbar-left" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo $url; ?>/web/index.php">
                                    <span id="home"><i class="bi bi-house"></i>&nbsp; Inicio</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active" aria-current="page"
                                    href="<?php echo $url; ?>/views/site/productos.php">
                                    <span id="products"><i class="bi bi-basket"></i>&nbsp; Productos</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span id="myaccount"><i class="bi bi-person-circle" height="100"
                                            width="100"></i>&nbsp;
                                        Mi Cuenta</a></span>
                                <ul class="dropdown-menu mt-2 border border-light text-left">
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/views/site/login.php"><span
                                                class="text-white" style=""><i
                                                    class="bi bi-box-arrow-in-right"></i>&nbsp;
                                                Iniciar Sesión / Registrarse</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><span class="text-white" style="">&nbsp;<i
                                                    class="bi bi-box-seam" style="font-size: 13px"></i>&nbsp; Mis
                                                pedidos</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active" aria-current="page"
                                    href="<?php echo $url; ?>/views/site/productos.php">
                                    <span id="mycarrito"><i class="bi bi-basket"></i>&nbsp; Mi Carrito</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </nav>