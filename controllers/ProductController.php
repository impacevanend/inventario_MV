<?php
require_once 'models/Product.php';

class ProductController {
    public function index() {
        $product = new Product();
        $products = $product->getAll();
        include 'views/products/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = new Product();
            $product->create($_POST);
            header('Location: index.php?controller=product&action=index');
        } else {
            include 'views/products/create.php';
        }
    }

    public function edit() {
        $product = new Product();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product->update($_GET['id'], $_POST);
            header('Location: index.php?controller=product&action=index');
        } else {
            $productData = $product->getById($_GET['id']);
            include 'views/products/edit.php';
        }
    }

    public function delete() {
        $product = new Product();
        $product->delete($_GET['id']);
        header('Location: index.php?controller=product&action=index');
    }

    public function show() {
        $product = new Product();
        $productData = $product->getById($_GET['id']);
        include 'views/products/show.php';
    }

    public function buy() {
        $product = new Product();
        if ($product->reduceStock($_GET['id'])) {
            echo "¡Producto comprado exitosamente!";
        } else {
            echo "No hay stock disponible para este producto.";
        }
    }
}
?>
