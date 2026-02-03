<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $vehiculo = $_POST['vehiculo'];
    $fecha = $_POST['fecha'];
    $horario = $_POST['horario'];

    $destinatario = "contacto@alquiza.com";
    $asunto = "Nueva reserva de $nombre";
    $mensaje = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nVehículo: $vehiculo\nFecha: $fecha\nHorario: $horario";

    $cabeceras = "From: no-reply@alquiza.com";

    
    $necesita_silla = isset($_POST['silla']) ? true : false;
    $tiene_mascota = isset($_POST['mascota']) ? true : false;

    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Reserva enviada correctamente.";
    } else {
        echo "Error al enviar la reserva.";
    }
} else {
    echo "Método no permitido.";
}
?>