<?php
session_start();
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new Usuario(); // Crear instancia del modelo Usuario
    }

    public function registrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre_usuario = $_POST['nombre_usuario'];
            $contrasena = $_POST['contrasena'];
            if ($this->usuarioModel->registrar($nombre_usuario, $contrasena)) {
                echo "Usuario registrado con éxito.";
            } else {
                echo "Error en el registro.";
            }
        }
        require 'views/usuario/registrar.php';
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre_usuario = $_POST['nombre_usuario'];
            $contrasena = $_POST['contrasena'];
            $user = $this->usuarioModel->autenticar($nombre_usuario, $contrasena);
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['rol'] = $user['rol'];
                header("Location: index.php?controller=Usuario&action=dashboard");
            } else {
                echo "Usuario o contraseña incorrectos.";
            }
        }
        require 'views/usuario/login.php';
    }

    public function logout() {
        session_unset();
        session_destroy();
        header("Location: index.php?controller=Usuario&action=login");
    }

    public function dashboard() {
        if ($_SESSION['rol'] != 'admin') {
            die("Acceso denegado");
        }
        require 'views/usuario/dashboard.php';
    }
}
?>
