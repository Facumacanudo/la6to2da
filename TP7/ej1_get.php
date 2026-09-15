<!-- Formulario HTML -->
<form action="ej1_get.php" method="get">
    <label>Ingresá tu nombre:</label>
    <input type="text" name="nombre" value="Facu">
    <button type="submit">Enviar</button>
</form>

<?php
// PHP para procesar
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    echo "<h3>¡Hola, $nombre! Bienvenido.</h3>";
    echo "<p><em>Observación: Mirá la URL, ahora dice '?nombre=$nombre'</em></p>";
}
?>
