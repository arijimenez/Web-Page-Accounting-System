<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $para = 'clienteslideres@hotmail.com'; // Reemplaza con tu dirección de correo electrónico
    $asunto = 'Mensaje de contacto desde tu página web';
    $mensaje_correo = "Nombre: $nombre\n";
    $mensaje_correo .= "Email: $email\n\n";
    $mensaje_correo .= "Mensaje:\n$mensaje\n";
    
    mail($para, $asunto, $mensaje_correo);
    
    // Redirigir a una página de confirmación o mostrar un mensaje de éxito
    header('Location: gracias.html'); // Reemplaza "gracias.html" con la página de confirmación
    exit;
}
?>
