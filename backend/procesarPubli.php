<?php
require_once('bd.php');

if (isset($_POST['publicar'])) {

    $contenido = trim($_POST['contenido']);
    $titulo = trim($_POST['titulo']);

    // Carpeta donde se guardarán las imágenes
    $carpeta = "../uploads/";
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true); //CREA LA CARPETA SI NO EXISTE
    }

    $imagenNombre = null;

    if (!empty($_FILES['imagen']['name'])) {

        $imagenNombre = time() . "_" . basename($_FILES['imagen']['name']);
        $rutaFinal = $carpeta . $imagenNombre;

        $tipo = mime_content_type($_FILES['imagen']['tmp_name']);
        $permitidos = ['image/jpeg','image/png','image/webp'];

        if (!in_array($tipo, $permitidos)) {
            die("Formato de imagen no permitido");
        }

        if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaFinal)) {
            die("Error al subir la imagen");
        }
    }

    $id_abogado; //COGER EL ID

    agregarPublicacion($titulo, $contenido, $imagenNombre, $id_abogado);

    echo "Publicación guardada correctamente: " .$contenido;
}
?>