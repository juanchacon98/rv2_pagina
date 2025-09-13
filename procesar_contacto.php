<?php
// procesar_contacto.php

// Iniciar sesión para medidas de seguridad (opcional)
session_start();

// Verificar que la solicitud sea POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Implementar medidas de seguridad adicionales

    // a. Validar Honeypot (si lo implementaste)
    if (!empty($_POST['website'])) { // Campo honeypot llamado 'website'
        echo "Solicitud inválida.";
        exit;
    }

    // b. Limitar la frecuencia de envíos
    // Limitar a 5 envíos por hora por usuario (usando sesiones)
    if (!isset($_SESSION['last_submission'])) {
        $_SESSION['last_submission'] = [];
    }

    $current_time = time();
    $window = 3600; // 1 hora en segundos
    $max_submissions = 5;

    // Filtrar envíos en la última hora
    $_SESSION['last_submission'] = array_filter($_SESSION['last_submission'], function($timestamp) use ($current_time, $window) {
        return ($current_time - $timestamp) < $window;
    });

    // Verificar si se ha excedido el límite
    if (count($_SESSION['last_submission']) >= $max_submissions) {
        echo "Has alcanzado el límite de envíos. Por favor, inténtalo de nuevo más tarde.";
        exit;
    }

    // Registrar el envío current
    $_SESSION['last_submission'][] = $current_time;

    // Recopilar y sanitizar los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $servicio = htmlspecialchars(trim($_POST['servicio']));

    // Capturar la IP del visitante
    $ipCliente = $_SERVER['REMOTE_ADDR'] ?? 'IP no detectada';

    // Validar los datos
    if (empty($nombre) || empty($email) || empty($telefono) || empty($servicio)) {
        echo "Por favor, completa todos los campos del formulario.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, proporciona una dirección de correo válida.";
        exit;
    }

    if (!preg_match("/^(\+?\d{1,3}[- ]?)?\d{10}$/", $telefono)) {
        echo "Por favor, proporciona un número telefónico válido. Ejemplo: +584242889840 o 04242889840";
        exit;
    }

    // Configurar los detalles del correo
    $mail_to_send_to = "juanchacon@rv2ven.com"; // Dirección de destino
    $from_email = "contacto@rv2ven.com";        // Dirección de remitente (local)

    $subject = "Nuevo Contacto desde RV2VEN - Servicio de Interés: " . $nombre;
    
    // Agregamos la IP del remitente al mensaje
    $message  = "Nombre: $nombre\n";
    $message .= "Correo Electrónico: $email\n";
    $message .= "Número Telefónico: $telefono\n";
    $message .= "Servicio de Interés: $servicio\n";
    $message .= "IP del remitente: $ipCliente\n\n";
    $message .= "Por favor, ponte en contacto con el cliente lo antes posible.";

    // Configurar los encabezados del correo
    $headers  = "From: $from_email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo utilizando la función mail()
    $sendmail = mail($mail_to_send_to, $subject, $message, $headers);

    if ($sendmail) {
        // Mostrar popup de confirmación y volver a la página principal
        echo '<!doctype html><html lang="es"><head><meta charset="utf-8">';
        echo '<meta name="viewport" content="width=device-width,initial-scale=1">';
        echo '<title>Contacto enviado</title>';
        echo '<style>
          body{font-family:Roboto,Arial,Helvetica,sans-serif;margin:0;padding:0;background:#f7f7fb}
          .modal{position:fixed;inset:0;display:flex;align-items:center;justify-content:center;background:rgba(0,0,0,0.45);z-index:9999}
          .box{background:#fff;padding:22px;border-radius:12px;max-width:480px;width:92%;text-align:center;box-shadow:0 10px 30px rgba(0,0,0,.18)}
          .box h2{margin:0 0 10px;font-size:20px;color:#2d4f8a}
          .box p{margin:0 0 18px;color:#333;line-height:1.4}
          .box button{background:linear-gradient(90deg,#2477aa,#6461e0);color:#fff;border:0;padding:10px 18px;border-radius:30px;cursor:pointer;font-weight:600}
        </style>';
        echo '</head><body>';
        echo '<div class="modal" id="modal"><div class="box"><h2>Perfecto!</h2><p>Ya estás un paso más cerca de tener tu recorrido virtual, te contactaremos lo más pronto posible.</p><button id="closeBtn">Cerrar</button></div></div>';
        echo '<script>
          (function(){
            var close = document.getElementById("closeBtn");
            close.addEventListener("click", function(){ window.location.href = "index.php"; });
            // Cerrar con Escape o clic fuera
            document.addEventListener("keydown", function(e){ if(e.key === "Escape") window.location.href = "index.php"; });
            document.getElementById("modal").addEventListener("click", function(e){
              if(e.target === this) window.location.href = "index.php";
            });
          })();
        </script>';
        echo '</body></html>';
        exit;
    } else {
        echo "Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Acceso directo sin método POST
    echo "Método de solicitud inválido.";
}
