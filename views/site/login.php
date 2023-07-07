<?php require_once('templates/header.php')
?>

</div>
<link rel="stylesheet" href="/Web_Proyect/web/css/login.css">

<div id="cont-login" style="">
    <!--FORMULARIO (INICIO DE SESIÓN)-->
    <div id="loginContenedor" class="login__container">
        <h1>Inicio de Sesión</h1>
        <form action="ingresar.php" method="POST" autocomplete="off">
            <div class="username">
                <input type="email" id="email" name="email" required>
                <label>Correo</label>
            </div>
            <div class="password">
                <input type="password" id="password" name="password" required>
                <label>Contraseña</label>
            </div>
            <div class="recordar">¿Olvidó su contraseña?</div>
            <?php
                if(isset($_GET['id']) && $_GET['id'] == "Invalid"){
                    echo ('<div style="color: white; background-color:red; border-radius:10px; margin-bottom:10px; text-align:center">Usuario o Contraseña Incorrectos</div>');
                }
            ?>
            <input type="submit" value="Ingresar">
            <div class="registro">
                <span class="info">¿No tienes cuenta?</span>
                <input type="checkbox" id="btn__regis">
                <div class="btn__regis">
                    <label for="btn__regis">REGÍSTRATE</label>
                </div>
            </div>
        </form>
    </div>

    <!--FORMULARIO (REGISTRO)-->
    <div id="contenedor" class="register__container">
        <h1>Registrarse</h1>
        <form action="registrar.php" method="POST" autocomplete="off">
            <div class="names">
                <input type="text" id="name" name="name" required>
                <label>Ingrese su Nombre</label>
            </div>
            <div class="last__names">
                <input class="ape__pat" type="text" id="apellP" name="apellP" required>
                <label class="label__1">Apellido Paterno</label>
                <input class="ape__mat" type="text" id="apellM" name="apellM" required>
                <label class="label__2">Apellido Materno</label>
            </div>
            <div class="mail">
                <input type="email" id="email" name="email" required>
                <label>Ingrese su Correo</label>
            </div>
            <div class="reg__password">
                <input type="password" id="password" name="password" required>
                <label>Ingrese una Contraseña</label>
            </div>
            <input class="mb-2" type="submit" value="Registrarse">
            <?php
                if(isset($_GET['email']) && $_GET['email'] == "Invalid"){
                echo ('<div style="color: white; background-color:red; border-radius:10px; margin:10px; text-align:center">El correo ingresado ya está Registrado!</div>');
                }
            ?>
        </form>
    </div>
</div>

<script src="/Web_Proyect/web/js/login.js"></script>
<?php require_once('templates/footer.php') ?>