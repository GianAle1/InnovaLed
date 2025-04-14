<?php
class Mascota {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getMascotasPerdidas() {
        // Obtener mascotas perdidas
        $query = "SELECT * FROM mascotas";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getImagenesPorMascota($mascota_id) {
        // Obtener imágenes de una mascota
        $query = "SELECT ruta FROM imagenes WHERE mascota_id = :mascota_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':mascota_id', $mascota_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
