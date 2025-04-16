<?php
require_once '../models/Producto.php'; // Se incluye el modelo Mascota que gestiona los datos
class ProductosController {
    private $model; // Se declara la propiedad del modelo
    // El constructor recibe la conexión a la base de datos y crea una instancia del modelo Mascota
    public function __construct($database) {
        $this->model = new Producto($database); // Se pasa la conexión a la base de datos al modelo
    }

    // Controlador de la página principal de mascotas perdidas
    public function index() {
        // Se recuperan las mascotas perdidas desde el modelo
        $Productos = $this->model->getProductos(); 
        // Se llama a la vista correspondiente, enviándole la lista de mascotas
        require 'views/Productos/index.php'; 
    }

    // Controlador de la página de contacto
    public function contacto() {
        // Se carga la vista para la página de contacto
        require 'views/Productos/contacto.php'; 
    }

    // Controlador de la página "nosotros"
    public function nosotros() {
        // Se carga la vista para la página "nosotros"
        require 'views/Productos/nosotros.php'; 
    }

    // Controlador de la página de testimonio
    public function testimonio() {
        // Se carga la vista para la página de testimonio
        require 'views/Productos/testimonio.php'; 
    }
}
?>
