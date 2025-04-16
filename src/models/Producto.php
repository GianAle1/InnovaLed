<?php
class Producto {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getProductos() {
        $query = "SELECT * FROM productos WHERE estado = 1";
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getImagenesPorProducto($id_producto) {
        $stmt = $this->db->prepare("SELECT url_imagen FROM imagenes_producto WHERE id_producto = ? ORDER BY orden ASC");
        $stmt->execute([$id_producto]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductoPorId($id_producto) {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id_producto = ?");
        $stmt->execute([$id_producto]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}


?>
