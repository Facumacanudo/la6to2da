<form action="" method="post">
    <input type="number" name="num1" required placeholder="Número 1">
    
    <select name="operacion">
        <option value="suma">Suma (+)</option>
        <option value="resta">Resta (-)</option>
        <option value="multiplicacion">Multiplicación (*)</option>
        <option value="division">División (/)</option>
    </select>
    
    <input type="number" name="num2" required placeholder="Número 2">
    <button type="submit">Calcular</button>
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operacion'];
    $resultado = 0;

    if ($op == "suma") { $resultado = $n1 + $n2; }
    if ($op == "resta") { $resultado = $n1 - $n2; }
    if ($op == "multiplicacion") { $resultado = $n1 * $n2; }
    if ($op == "division") { 
        // Prevenir división por cero
        $resultado = ($n2 != 0) ? ($n1 / $n2) : "Error (División por 0)"; 
    }

    echo "<h3>Resultado: $resultado</h3>";
}
?>
