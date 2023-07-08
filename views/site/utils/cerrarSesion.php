<?php
    session_start();
    unset($_SESSION['usuario']);
    header("Location:/Web_Proyect/views/site/login.php");
?>