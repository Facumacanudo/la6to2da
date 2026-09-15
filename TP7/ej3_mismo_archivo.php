<form action="" method="post">
    <label>Escribí un mensaje:</label>
    <input type="text" name="mensaje">
    <button type="submit">Enviar Formulario</button>
</form>

<?php
// action="" hace que se envíe a este mismo archivo
if (isset($_POST['mensaje'])) {
    $mensaje = $_POST['mensaje'];
    echo "<hr>";
    echo "<h3>Datos Recibidos:</h3>";
    echo "<p>El mensaje que escribiste es: $mensaje</p>";
}
?>
