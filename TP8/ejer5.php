<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function calcularDescuento($precio, $porcentaje = 10) {
    $descuento = ($precio * $porcentaje) / 100;
    return $precio - $descuento;
}

// Prueba 1: Usando el 10% por defecto
$precioFinal1 = calcularDescuento(1000);
echo "<p>Precio original: $1000 | Con descuento por defecto (10%): $$precioFinal1</p>";

// Prueba 2: Indicando un porcentaje distinto (ejemplo: 20%)
$precioFinal2 = calcularDescuento(1000, 20);
echo "<p>Precio original: $1000 | Con descuento del 20%: $$precioFinal2</p>";
?>
</body>
</html>