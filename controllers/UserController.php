<?php
require_once 'models/User.php';

class UserController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            if ($user->authenticate($_POST['username'], $_POST['password'])) {
                // Redirigir a la página de productos si la autenticación es exitosa
                header('Location: index.php?controller=product&action=index');
            } else {
                // Mostrar mensaje de error si la autenticación falla
                $error = "Usuario o contraseña invalido";
                include 'views/users/login.php';
            }
        } else {
            include 'views/users/login.php';
        }
    }
}
?>
