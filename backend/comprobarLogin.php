<?php 
    session_start();
    include_once('bd.php');

    $usuario = $_POST["usuario"];
    $passwd = $_POST["contrasena"];

    $validacion = checkLogIn($usuario, $passwd);

    if ($validacion != null) {
        header("Location: ../frontend/pagePublicaciones.php");
    }else {
        header("Location: ../frontend/loginPage.php?error=1");
    exit();
    }
?>