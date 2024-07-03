<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Productos</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Inventario de productos</h1>
        <a href="index.php?controller=product&action=create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Agregar producto</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Fecha de creación</th>
                    <th>Última fecha de venta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['reference'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['weight'] ?></td>
                    <td><?= $product['category'] ?></td>
                    <td><?= $product['stock'] ?></td>
                    <td><?= $product['creation_date'] ?></td>
                    <td><?= $product['last_sale_date'] ?></td>
                    <td>
                        <a href="index.php?controller=product&action=show&id=<?= $product['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="index.php?controller=product&action=edit&id=<?= $product['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="index.php?controller=product&action=delete&id=<?= $product['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        <a href="index.php?controller=product&action=buy&id=<?= $product['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-shopping-cart"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
