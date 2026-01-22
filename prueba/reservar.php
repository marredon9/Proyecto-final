<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $vehiculo = $_POST['vehiculo'];
    $fecha = $_POST['fecha'];
    $horario = $_POST['horario'];

    // Aquí puedes guardar los datos en una base de datos o enviar un email
    // Por ejemplo, enviar un email:
    $destinatario = "contacto@alquiza.com";
    $asunto = "Nueva reserva de $nombre";
    $mensaje = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nVehículo: $vehiculo\nFecha: $fecha\nHorario: $horario";

    $cabeceras = "From: no-reply@alquiza.com";

    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Reserva enviada correctamente.";
    } else {
        echo "Error al enviar la reserva.";
    }
} else {
    echo "Método no permitido.";
}
?>