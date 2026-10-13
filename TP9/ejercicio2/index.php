<?php
$producto = [
	"nombre" => "Pelota ADIDAS Al Rhila",
	"precio" => 250000,
	"stock" => 20
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2 - Producto</title>
</head>
<body>
	<h1>Datos del producto</h1>
	<p>Nombre: <?php echo $producto["nombre"]; ?></p>
	<p>Precio: $<?php echo $producto["precio"]; ?></p>
	<p>Stock: <?php echo $producto["stock"]; ?></p>
</body>
</html>
