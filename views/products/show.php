<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Ver el producto</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Detalles del producto</h1>
        <div class="card">
            <div class="card-header">
            ID del Producto: <?= $productData['id'] ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $productData['name'] ?></h5>
                <p class="card-text">
                    <strong>Referencia:</strong> <?= $productData['reference'] ?><br>
                    <strong>Precio:</strong> <?= $productData['price'] ?><br>
                    <strong>Peso:</strong> <?= $productData['weight'] ?><br>
                    <strong>Categoría:</strong> <?= $productData['category'] ?><br>
                    <strong>Stock:</strong> <?= $productData['stock'] ?><br>
                    <strong>Fecha de creación:</strong> <?= $productData['creation_date'] ?><br>
                    <strong>Última fecha de venta:</strong> <?= $productData['last_sale_date'] ?>
                </p>
                <a href="index.php?controller=product&action=index" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>
        </div>
    </div>
</body>
</html>
