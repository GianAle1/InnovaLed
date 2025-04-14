<?php
require '../config/database.php'; // Incluir tu configuración de base de datos
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Asegúrate de que la ruta sea correcta

class ContactoController {
    public function enviar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capturar y sanitizar los datos del formulario
            $nombre = htmlspecialchars(trim($_POST['nombre']));
            $email = htmlspecialchars(trim($_POST['email']));
            $mensaje = htmlspecialchars(trim($_POST['mensaje']));

            // Validación simple de campos
            if (empty($nombre) || empty($email) || empty($mensaje)) {
                header("Location: ../views/contacto.php?mensaje=Todos los campos son requeridos.");
                exit();
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../views/contacto.php?mensaje=El formato de email no es válido.");
                exit();
            }

            // Configuración de PHPMailer
            $mail = new PHPMailer(true);
            try {
                // Configuración del servidor SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Cambia esto si usas otro servidor
                $mail->SMTPAuth = true;
                $mail->Username = 'gianfranco.alejandro.95@gmail.com'; // Tu dirección de correo
                $mail->Password = 'tqzpbtdlgrqtjuaa'; // Tu contraseña de correo (usa contraseña de aplicación si tienes 2FA habilitado)
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // O PHPMailer::ENCRYPTION_SMTPS
                $mail->Port = 587; // O 465 para SMTPS

                // Destinatarios
                $mail->setFrom('gianfranco.alejandro.95@gmail.com', 'Tu Nombre'); // Cambia "Tu Nombre" a tu nombre real
                $mail->addAddress('gianfranco.alejandro.95@gmail.com', 'Destinatario'); // Cambia esto a la dirección de destino

                // Contenido
                $mail->isHTML(true);
                $mail->Subject = "Nuevo mensaje de contacto de $nombre";
                $mail->Body = "Nombre: $nombre<br>Email: $email<br>Mensaje:<br>$mensaje";
                $mail->AltBody = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

                // Enviar
                $mail->send();
                header("Location: ../views/contacto.php?mensaje=Mensaje enviado exitosamente.");
            } catch (Exception $e) {
                header("Location: ../views/contacto.php?mensaje=Hubo un error al enviar el mensaje: {$mail->ErrorInfo}");
            }
            exit(); // Asegúrate de detener la ejecución después de redirigir
        } else {
            header("Location: ../views/contacto.php?mensaje=Método no permitido.");
            exit();
        }
    }
}

// Crear instancia del controlador y llamar al método enviar
$controller = new ContactoController();
$controller->enviar();
?>
