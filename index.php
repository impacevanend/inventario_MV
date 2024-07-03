
<?php
require_once 'config/Database.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/UserController.php';

$controller = $_GET['controller'] ?? 'product';
$action = $_GET['action'] ?? 'index';

if ($controller === 'product') {
    $productController = new ProductController();
    $productController->{$action}();
} elseif ($controller === 'user') {
    $userController = new UserController();
    $userController->{$action}();
}
?>