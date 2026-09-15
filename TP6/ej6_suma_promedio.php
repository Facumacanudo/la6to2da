<?php
$numeros = [10, 20, 30, 40, 50, 60];
$suma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $suma = $suma + $numeros[$i];
}

$promedio = $suma / count($numeros);

echo "<p>La suma total es: $suma</p>";
echo "<p>El promedio es: $promedio</p>";
?>
