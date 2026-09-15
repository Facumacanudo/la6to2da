<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function mostrarProducto($nombre, $precio) {
    echo "<p>Producto: <strong>$nombre</strong> - Precio: $$precio</p>";
}

// Mostrar 3 productos distintos
mostrarProducto("Teclado Mecánico", 45000);
mostrarProducto("Mouse Gamer", 25000);
mostrarProducto("Monitor 24 pulgadas", 180000);
?>
</body>
</html>