<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST["nombre_apellidos"];
    $email = $_POST["email"];
    $movil = $_POST["movil"];

    // Destinatario del correo electrónico
    $destinatario = "cespimpress@gmail.com";

    // Asunto del correo electrónico
    $asunto = "Nueva solicitud de rutina para bajar de peso";

    // Mensaje del correo electrónico
    $mensaje = "Nombre y Apellidos: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Móvil: $movil\n";

    // Cabeceras del correo electrónico
    $cabeceras = "From: $email";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $mensaje, $cabeceras);
}
?>
