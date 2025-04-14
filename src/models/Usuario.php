<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $db;

    public function __construct() {
        $this->db = connectDB(); // Usar la función connectDB para obtener la conexión
    }

    public function registrar($nombre_usuario, $contrasena, $rol = 'usuario') {
        $contrasena_hash = password_hash($contrasena, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO usuarios (nombre_usuario, contrasena, rol) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre_usuario, $contrasena_hash, $rol]);
    }

    public function autenticar($nombre_usuario, $contrasena) {
        $stmt = $this->db->prepare("SELECT id, contrasena, rol FROM usuarios WHERE nombre_usuario = ?");
        $stmt->execute([$nombre_usuario]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($contrasena, $user['contrasena'])) {
            return $user; // Retorna los datos del usuario autenticado
        }
        return false;
    }
}
?>
