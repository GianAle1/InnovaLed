<?php
require_once 'models/Producto.php';

class CarritoController
{
    private $productoModel;

    public function __construct()
    {
        session_start();
        $db = connectDB();
        $this->productoModel = new Producto($db);

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
    }

    public function agregar()
    {
        $id = $_GET['id'] ?? null;
        if ($id && is_numeric($id)) {
            $producto = $this->productoModel->getProductoPorId($id);
            if ($producto) {
                if (!isset($_SESSION['carrito'][$id])) {
                    $_SESSION['carrito'][$id] = [
                        'producto' => $producto,
                        'cantidad' => 1
                    ];
                } else {
                    $_SESSION['carrito'][$id]['cantidad'] += 1;
                }
            }
        }
        header('Location: index.php');
        exit;
    }

    public function eliminar()
    {
        $id = $_GET['id'] ?? null;
        if ($id && isset($_SESSION['carrito'][$id])) {
            unset($_SESSION['carrito'][$id]);
        }
        header('Location: index.php?controller=Carrito&action=ver');
        exit;
    }

    public function ver()
    {
        $carrito = $_SESSION['carrito'] ?? [];
        require_once 'views/carrito/ver.php'; // vista donde se mostrará el carrito
    }
}
