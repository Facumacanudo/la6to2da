<?php
$numeros = [12, 45, 7, 89, 23, 100, 4, 56];
$maximo = $numeros[0]; // Asumimos que el primero es el mayor para empezar

foreach ($numeros as $num) {
    if ($num > $maximo) {
        $maximo = $num; // Si encontramos uno más grande, lo guardamos
    }
}

echo "<p>El valor máximo del array es: $maximo</p>";
?>
