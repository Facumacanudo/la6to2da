<?php
$notas = [4, 7, 9, 2, 6, 8, 5, 10];
$aprobados = 0;

foreach ($notas as $nota) {
    if ($nota >= 6) {
        $aprobados++; // Sumamos 1 al contador
    }
}

echo "<p>Total de notas aprobatorias: $aprobados</p>";
?>
