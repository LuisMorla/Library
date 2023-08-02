<?php
// Incluir el archivo de la clase DBGestionLibreria
include './dbgestionlibrary.php';

// Crear una instancia de la clase DBGestionLibreria
$dbGestionLibreria = new DBGestionLibreria();

// Verificar si se ha enviado el formulario usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $fecha = $_POST["fecha"];
    $correo = $_POST["email"];
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    // Insertar los datos en la base de datos
    $insertado = $dbGestionLibreria->insertarContacto($fecha, $correo, $nombre, $asunto, $comentario);

    // Verificar si la inserción fue exitosa
    if ($insertado) {
        $mensaje = "Los datos han sido insertados correctamente.";
    } else {
        $mensaje = "Ha ocurrido un error al insertar los datos.";
    }

    header("Refresh: 2; URL=./../contacto.php");

    echo $mensaje;
}
?>
