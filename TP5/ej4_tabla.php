<?php
$numero = 5; // El número de la tabla de multiplicar

echo "<table border='1'>";
echo "<tr><th>Operación</th><th>Resultado</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
}

echo "</table>";
?>
