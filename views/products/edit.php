<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Editar producto</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Editar producto</h1>
        <form action="index.php?controller=product&action=edit&id=<?= $productData['id'] ?>" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $productData['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="reference" class="form-label">Referencia</label>
                <input type="text" class="form-control" id="reference" name="reference" value="<?= $productData['reference'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" value="<?= $productData['price'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Peso</label>
                <input type="number" class="form-control" id="weight" name="weight" value="<?= $productData['weight'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoría</label>
                <input type="text" class="form-control" id="category" name="category" value="<?= $productData['category'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="<?= $productData['stock'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="creation_date" class="form-label">Fecha de creación</label>
                <input type="date" class="form-control" id="creation_date" name="creation_date" value="<?= $productData['creation_date'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="last_sale_date" class="form-label">Última fecha de venta</label>
                <input type="datetime-local" class="form-control" id="last_sale_date" name="last_sale_date" value="<?= $productData['last_sale_date'] ?>">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Actualizar</button>
        </form>
    </div>
</body>
</html>
