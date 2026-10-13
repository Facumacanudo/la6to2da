<?php
$carrito = [
	["producto" => "Cuaderno", "precio" => 2500, "cantidad" => 2],
	["producto" => "Lápiz", "precio" => 500, "cantidad" => 3],
	["producto" => "Mochila", "precio" => 15000, "cantidad" => 1]
];

$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5 - Carrito</title>
</head>
<body>
	<h1>Carrito de compras</h1>
	<?php foreach ($carrito as $item): ?>
		<?php $subtotal = $item["precio"] * $item["cantidad"]; ?>
		<p>
			<?php echo $item["producto"]; ?>:
			$<?php echo $item["precio"]; ?> x <?php echo $item["cantidad"]; ?> =
			$<?php echo $subtotal; ?>
		</p>
		<?php $total = $total + $subtotal; ?>
	<?php endforeach; ?>
	<p>Total de la compra: $<?php echo $total; ?></p>
</body>
</html>
