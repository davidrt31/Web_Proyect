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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="<?php echo $url; ?>/web/assets/DonGil.ico" type="image/x-icon">

    <style>
    body {
        background-image: url('https://cloudappi-web.s3.eu-west-1.amazonaws.com/wp-content/uploads/2022/02/02090502/imagenes-blog.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-md">
            <a class="navbar-brand" href="<?php echo $url; ?>/admin/index.php">
                <img src="<?php echo $url; ?>/web/assets/DonGilLogo.png" alt="Logo" width="30" height="29"
                    class="d-inline-block align-text-top" style="background:white; border-radius:100%; padding: 1px">
                &nbsp; Modo Administrador
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $url; ?>/admin/index.php">
                            <i class="bi bi-house"></i>&nbsp; Inicio
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-circle"></i>&nbsp; Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="<?php echo $url; ?>/views/admin/usuarios/index.php">Visualizar
                                    Usuarios</a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo $url; ?>/views/admin/usuarios/create.php">Añadir
                                    Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-basket"></i>&nbsp; Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="<?php echo $url; ?>/views/admin/productos/index.php">Visualizar
                                    Productos</a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo $url; ?>/views/admin/productos/create.php">Añadir
                                    Productos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-ticket"></i>&nbsp; Boletas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="<?php echo $url; ?>/views/admin/boletas/index.php">Visualizar Boletas</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="<?php echo $url; ?>/web/index.php">
                <i class="bi bi-arrow-bar-left"></i> Regresar al Sitio Web
            </a>
        </div>
    </nav>
    <div class="container">
        <br>