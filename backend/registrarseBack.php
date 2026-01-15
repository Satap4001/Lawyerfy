<?php 
require_once('bd.php');

// Campos comunes
$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$email = $_POST['email'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$genero = $_POST['genero'] ?? '';
$localidad = $_POST['localidad'] ?? '';

// Validación básica común
if ($nombre === '' || $apellido === '' || $email === '' || $contraseña === '') {
    die('Faltan campos obligatorios');
}

// Detectar tipo de formulario
if (isset($_POST['especializacion'])) {
    // ===== FORMULARIO ABOGADO =====
    $tipo = 'Abogado';

    $nacionalidad   = $_POST['nacionalidad'] ?? '';
    $especializacion = $_POST['especializacion'] ?? '';

    if ($nacionalidad === '' || $especializacion === '') {
        die('Faltan campos obligatorios del abogado');
    }

} else {
    // ===== FORMULARIO CLIENTE =====
    $tipo = 'Cliente';
}

// Valores por defecto
if ($genero === '') {
    $genero = 'Prefiero no decirlo';
}
if ($telefono === '') {
    $telefono = null;
}
if ($localidad === '') {
    $localidad = null;
}


// INSERCIÓN DE DATOS EN LA BASE DE DATOS
$mensaje = "";
if ($tipo === 'Cliente') {
    $mensaje = newCliente($nombre, $apellido, $email, $contraseña, $telefono, $genero, $localidad);
}else if ($tipo === 'Abogado') {
    //LA ESPECIALIDAD ES UNA TABLA APARTE
    newAbogado($nombre, $apellido, $email, $contraseña, $nacionalidad, $telefono, $genero, $localidad);
}

// ===== EJEMPLO DE SALIDA =====
session_start();

if ($mensaje != "EL EMAIL YA ESTÁ REGISTRADO") {
    header("Location: ../frontend/home.php");
    exit();
} else {
    $_SESSION['error'] = "El email ya está registrado. Intenta con otro.";
    header("Location: ../frontend/registrarse.php");
    exit();
}
?>