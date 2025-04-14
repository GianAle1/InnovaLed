<?php
require_once '../models/Mascota.php'; // Se incluye el modelo Mascota que gestiona los datos
class MascotasController {
    private $model; // Se declara la propiedad del modelo
    // El constructor recibe la conexión a la base de datos y crea una instancia del modelo Mascota
    public function __construct($database) {
        $this->model = new Mascota($database); // Se pasa la conexión a la base de datos al modelo
    }

    // Controlador de la página principal de mascotas perdidas
    public function index() {
        // Se recuperan las mascotas perdidas desde el modelo
        $mascotas = $this->model->getMascotasPerdidas(); 
        // Se llama a la vista correspondiente, enviándole la lista de mascotas
        require 'views/mascotas/index.php'; 
    }

    // Controlador de la página de contacto
    public function contacto() {
        // Se carga la vista para la página de contacto
        require 'views/mascotas/contacto.php'; 
    }

    // Controlador de la página "nosotros"
    public function nosotros() {
        // Se carga la vista para la página "nosotros"
        require 'views/mascotas/nosotros.php'; 
    }

    // Controlador de la página de testimonio
    public function testimonio() {
        // Se carga la vista para la página de testimonio
        require 'views/mascotas/testimonio.php'; 
    }
}
?>
